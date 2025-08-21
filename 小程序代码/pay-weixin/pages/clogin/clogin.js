// pages/clogin/clogin.js
/**
 * 彩虹聚合登录
 */
Page({

  /**
   * 页面的初始数据
   */
  data: {
    siteurl:'',
    state:'',
    canGetUserInfo: false,
    userInfo: {},
    hasUserInfo: false,
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(opt) {
    wx.hideHomeButton();
    if(!opt.hasOwnProperty('siteurl') || !opt.hasOwnProperty('state')){
      this.showMessage('页面参数不完整', '错误提示', function(){ wx.exitMiniProgram(); });
      return;
    }
    this.siteurl = opt.siteurl,
    this.state = opt.state
    this.login()
  },

  showMessage(msg, title, callback){
    title = title || '错误提示'
    wx.showModal({
      title: title,
      content: msg,
      showCancel:false,
      success(){
        if(callback) callback()
      }
    });
  },
  request(data, callback){
    var that = this;
    wx.showLoading({
      title: '加载中',
      mask: true
    })
    wx.request({
      url: that.siteurl + 'wxapp.php',
      method:'post',
      data: data,
      header: {'content-type': 'application/x-www-form-urlencoded'},
      success(data){
        wx.hideLoading()
        if(data.statusCode < 400){
          callback(data.data)
        }else{
          that.showMessage('request fail: statusCode='+data.statusCode)
        }
      },
      fail(err){
        wx.hideLoading()
        that.showMessage(err.errMsg)
      }
    })
  },
  login(){
    var that = this;
    wx.login({
      success(res){
        if (res.code) {
          that.request({
            state: that.state,
            code: res.code
          }, function(data){
            if(data.code == 0){
              if(data.getUserInfo == true && wx.getUserProfile){
                that.setData({
                  canGetUserInfo: true
                })
              }else{
                that.showMessage('登录成功！请返回到浏览器！', '提示', function(){ wx.exitMiniProgram(); })
              }
            }else{
              that.showMessage(data.msg)
            }
          })
        }else{
          that.showMessage(res.errMsg, '登录失败')
        }
      },
      fail(err){
        that.showMessage(err.errMsg, '登录失败')
      }
    })
  },
  getUserProfile(e) {
    var that = this;
    wx.getUserProfile({
      desc: '快捷登录',
      success: (res) => {
        //console.log(res)
        that.setData({
          userInfo: res.userInfo,
          hasUserInfo: true
        })
        that.request({
          state: that.state,
          rawData: res.rawData,
          signature: res.signature
        }, function(data){
          if(data.code == 0){
            that.showMessage('登录成功！请返回到浏览器！', '提示', function(){ wx.exitMiniProgram(); })
          }else{
            that.showMessage('登录失败！' + data.msg, '提示', function(){ wx.exitMiniProgram(); })
          }
        })
      }
    })
  },
  cancelLogin(e){
    wx.exitMiniProgram();
  }
})
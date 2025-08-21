// pages/pay/pay.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    isPaySuccess: false,
    disablePay: true,
    ordername: '微信安全支付',
    currency: '￥',
    money: '0.00',
    mchname: '微信支付商户',
    pay_success_msg: '支付成功，请返回浏览器查看结果',
    url: null,
    code: null,
    payData: {}
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(opt) {
    wx.hideHomeButton();
    if(!opt.hasOwnProperty('url') || !opt.hasOwnProperty('money')){
      this.showMessage('页面参数不完整', '错误提示', function(){ wx.exitMiniProgram(); });
      return;
    }
    this.url = opt.url;
    this.setData({
      money: opt.money
    })
    wx.showLoading({
      title: '加载中',
      mask: true
    })
    this.login();
  },

  showMessage(msg, title, callback){
    title = title || '错误提示'
    wx.showModal({
      title: title,
      content: msg,
      showCancel: false,
      success(){
        if(callback) callback()
      }
    });
  },
  login(){
    var that = this;
    wx.login({
      success(res){
        if (res.code) {
          that.code = res.code;
          that.getPayData();
        }else{
          that.showMessage(res.errMsg, '登录失败')
        }
      },
      fail(err){
        that.showMessage(err.errMsg, '登录失败')
      }
    })
  },
  getPayData(){
    var that = this;
    wx.request({
      url: that.url,
      data: { code: that.code },
      success(res){
        wx.hideLoading()
        if(res.statusCode < 400){
          if(res.data.code == 0){
            that.payData = res.data.data;
            that.setData({
              disablePay: false
            })
            that.submitPay();
          }else{
            that.showMessage(res.data.msg)
          }
        }else{
          that.showMessage('request fail: statusCode='+res.statusCode)
        }
      },
      fail(err){
        wx.hideLoading()
        that.showMessage(that.url + err.errMsg)
      }
    })
  },
  submitPay(){
    if(this.disablePay) return;
    var that = this;
    try {
      var pay = this.payData;
      wx.requestPayment({
        timeStamp: pay.timeStamp + "",
        nonceStr: pay.nonceStr,
        package: pay.package,
        signType: pay.signType,
        paySign: pay.paySign,
        success(res) {
          that.setData({
            isPaySuccess: true
          })
        },
        fail(err) {
          that.showMessage(err.errMsg)
        }
      });
    } catch (e) {
      console.log(e.message);
      that.showMessage(e.message)
    }
  },
  exitApp(e){
    wx.exitMiniProgram();
  }
})
Page({
  data: {
    loading: false,
    disabled: true,
    isPaySuccess: false,
    money: '0.00',
    ordername: null,
    mchname: '支付宝平台商户',
    url: null,
    tradeNO: null,
    authCode: null,
    scope: 'auth_base',
    getPhoneNumber: false, //支付前是否获取手机号
    phoneData: null,
  },
  onLoad(opt) {
    my.hideBackHome();
    var keys = Object.keys(opt);
    if(!keys.includes('url') || !keys.includes('money')){
      this.showMessage('页面参数不完整', '错误提示', function(){ my.exitMiniProgram(); });
      return;
    }
    this.data.url = opt.url;
    this.setData({
      money: opt.money
    })
    if(keys.includes('name')){
      this.setData({
        ordername: opt.name
      })
    }
    if(!this.data.getPhoneNumber){
      my.showLoading({
        title: '加载中',
        mask: true
      })
      this.login();
    }
  },
  showMessage(msg, title, callback){
    title = title || '错误提示'
    my.showModal({
      title: title,
      content: msg,
      showCancel: false,
      success(){
        if(callback) callback()
      }
    });
  },
  login(){
    my.getAuthCode({
      scopes: this.data.scope,
      success: (res) => {
        this.data.authCode = res.authCode;
        this.getPayData();
      },
      fail: (err) => {
        this.showMessage(err.errorMessage, '登录失败')
      }
    })
  },
  getPhoneNumber() {
    my.showLoading({
      title: '加载中',
      mask: true
    })
    my.getPhoneNumber({
      success: (res) => {
        let response = JSON.parse(res.response)
        if(response.response.subMsg){
          my.hideLoading()
          this.showMessage(response.response.subMsg)
          return;
        }
        this.data.phoneData = res.response;
        this.login();
      },
      fail: (err) => {
        my.hideLoading()
        this.showMessage(err.errorMessage)
      },
    });
  },
  getPayData(){
    my.request({
      url: this.data.url,
      data: { auth_code: this.data.authCode, scope: this.data.scope, phone_data: this.data.phoneData },
      success: (res) => {
        my.hideLoading()
        if(res.status < 400){
          if(res.data.code == 0){
            this.data.tradeNO = res.data.data;
            this.setData({
              disabled: false,
              getPhoneNumber: false
            })
            this.submitPay();
          }else{
            this.showMessage(res.data.msg)
          }
        }else{
          this.showMessage('request fail: status='+res.status)
        }
      },
      fail: (err) => {
        my.hideLoading()
        this.showMessage(err.errorMessage)
      }
    })
  },
  submitPay(){
    if(this.data.disabled) return;
    this.setData({ loading: true });
    try {
      my.tradePay({
        tradeNO: this.data.tradeNO,
        success: (res) => {
          this.setData({ loading: false });
          if(res.resultCode=='9000'){
            this.setData({
              isPaySuccess: true
            })
          }else if(err.resultCode!='6001'){
            this.showMessage(JSON.stringify(res), '支付失败')
          }
        },
        fail: (err) => {
          this.setData({ loading: false });
          if(err.resultCode!='6001'){
            this.showMessage(JSON.stringify(err), '支付失败')
          }
        }
      });
    } catch (e) {
      console.log(e.message);
      this.showMessage(e.message)
    }
  },
  exitApp(e){
    my.exitMiniProgram();
  }
});

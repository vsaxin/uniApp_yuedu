import Vue from 'vue'
import App from './App'

Vue.config.productionTip = false

App.mpType = 'app'
Vue.prototype.checkLogin = function(backpage, backtype){
	var SUID  = uni.getStorageSync('SUID');
	var SRAND = uni.getStorageSync('SRAND');
	var SNAME = uni.getStorageSync('SNAME');
	var SFACE = uni.getStorageSync('SFACE');
	if(SUID == '' || SRAND == '' || SFACE == ''){
		uni.redirectTo({url:'../login/login?backpage='+backpage+'&backtype='+backtype});
		return false;
	}
	return [SUID, SRAND, SNAME, SFACE];
}
var APITOKEN  = 'api2018';
Vue.prototype.apiServer = 'http://192.168.18.34:8888/index.php?token='+APITOKEN+'&c=';
Vue.prototype.staticServer = 'http://192.168.18.34:8888/';
const app = new Vue({
    ...App
})
app.$mount()

<template>
	<view>
		this is write
	</view>
</template>

<script>
	export default {
		data() {
			return {
				
			}
		},
		onLoad : function() {
		//backpage, backtype 2个参数分别代表：
		// backpage : 登录后返回的页面
		// backtype : 打开页面的类型[1 : redirectTo 2 : switchTab]
		var loginRes = this.checkLogin('../my/my', '2');
		if(!loginRes){return false;}
		},
		methods: {
			
		}
	}
</script>

<style>

</style>

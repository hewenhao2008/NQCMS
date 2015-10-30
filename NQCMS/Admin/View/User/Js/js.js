$("form").validate({
	username:{
		rule:{required:true,regexp:/^.{6,}$/},
		error:{required:'用户名不能为空',regexp:'用户名不能少于6位'},
		success="用户名输入正确"
	},
	password:{
		rule:{required:true,regexp:/^.{4,}$/},
		error:{required:'密码不能为空',regexp:'密码不能少于4位'}
	},
	repassword:{
		rule:{required:true,confirm:"password"},
		error:{required:'密码不能为空',confirm:'两次输入的密码不一致！'},message:'两次输入的密码不一致！'
	},
	newpassword:{
		rule:{required:true,confirm:"password"},
		error:{required:'密码不能为空',confirm:'两次输入的密码不一致！'}

	},
	oldpassword:{
		rule:{required:true,ajax{|U:"User/check"}},
		error:{required:'标题不能为空',regexp:'文字太少了..'}
	}
})
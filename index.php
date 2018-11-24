<script>
        function User(){
            this.username = '';
            this.password = '';
            // phuong thuc
            this.setInfo(username,password){
                this.username = username;
                this.password = password;
            }
            this.checkLogin(){
                return (this.username === 'admin' && this.password === '@123');
            }
        }
        var user = new User();
        user.setInfo('admin','@123');
        if(user.checkLogin()){
            console.log("Dang nhap thanh cong.");
        }
        else{
            console.log("Dang nhap that bai.");
        }
</script>
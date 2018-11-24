/*
function User(){
       
        var username = '';
        var password = '';
        
        this.setInfo = function (username,password){
            this.username = username;
            this.password = password;
        }
        this.checkLogin = function(){
            return (this.username === 'admin' && this.password === '@123');
        }
        return this;
}
var user = new User();
user.setInfo('admin','@123');
if(user.checkLogin()){
    console.log("Login scuess");
}
else{
    console.log("Login Error");
}
*/
function User(){
     
    this.username = '';
    this.password = '';

    User.prototype.setInfo = function(username,password){
        this.username = username;
        this.password = password;
    }
    User.prototype.checkLogin = function(){
        return (this.username === 'admin' && this.password === '@123');
    }
    return this;
}
var user = new User();
user.setInfo('admin','@123');
if(user.checkLogin()){
    console.log("Login scuess");
}
else{
    console.log("Login error");
}
// obejct
 
var objStudent = {id:1,name:"Tuan Khoi",address:"Ha Noi"};
console.log(objStudent.id);
console.log(objStudent.name);
console.log(objStudent.address);







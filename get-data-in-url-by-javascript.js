// Example url have two parameter Name & Email Id  https/example.com/thank-you/?yourname=amit&youremail=+youremail;

<script>
  var query_string=window.location.search;
var urlParmArr=new URLSearchParams(query_string);
var yourname=urlParmArr.get('yourname');
var youremail=urlParmArr.get('youremail');
if(yourname!=null){
console.log(yourname);
}
if(youremail!=null){
console.log(youremail);
}
  
 </script>

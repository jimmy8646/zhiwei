function toggle($el){
  var div = document.getElementById($el);
  if (div.style.display =='block'){
      div.style.display = 'none';
      return;
  }
  div.style.display ='block';
}

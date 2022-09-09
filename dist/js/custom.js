"use strict";

  if(document.querySelector("thead")){
      document.querySelector("thead").classList.add("sticky-top")

  }


  let getCurrentUrl=function(){

    let url=window.location.href
    let arr=url.split("/")
    let id= arr[arr.length-1]
    id=id.split(".")
    id=id[0];
    document.getElementById(id).classList.add("active")

  }

  getCurrentUrl();
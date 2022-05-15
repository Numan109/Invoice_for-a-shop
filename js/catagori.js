function change() {
    var product_name=document.getElementsByClassName("product_name").value;
   
    var model = "";
    if(product_name[0] == "refrigerator"){
        
        model= ["Vis-Ref-138L", "Wal-Ref-220L", "Min-Ref-168L"];

    }else if(product_name[0]=="telivision"){
        model=["Vis-LED_TV-24-Inch","Wal-LED_TV-56-Inch"];
    }

   

    var string="";
    for(var i=0; i<model.length;i++){
        string=string+ "<option value='"+model[i]+"'>"+model[i]+ "</option>";
    }
    string= "<select>" +string+ "</select>";
    document.getElementsByClassName("model")[0].innerHTML=string;
} 
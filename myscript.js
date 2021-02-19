function validation()
{
	var result=true;
	var i=document.getElementsByTagName("input");
	if(i[0].value.length==0)
	{
		alert("Please Enter the Name");
		result=false;
	}
	if((i[1].value.length!=0)&& (i[1].value.search("@")) && (i[1].value.search(".com")))
	{
		
		result=true;
	}
	else{
		alert("Please Enter the Valid Email ID");
		result=false;
	}
	if(i[2].value =="IT2020")
        result=true;
    else
	{
		alert("Invalid Password");
        result=false;	
    }		
	return(result);
}
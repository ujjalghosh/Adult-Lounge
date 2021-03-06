 function baseUrl() {
        return window.location.origin;
    }
  
  let paramsArr = [];
  var checkedVals = $('.filter_performer:checkbox:checked').map(function() {
    return this.value;
}).get();
 checkedVals=checkedVals.join(",") ;

if(checkedVals!=''){
	let a= {
		name: 'performer',
	    key: 'performer',
	    value: checkedVals
	    }
	//paramsArr.push(a)
 	add(paramsArr, a);
 }else{
 	var index = paramsArr.findIndex(p => p.key == 'performer') 
	paramsArr.splice(index,1);
 }

console.log('paramsArr',paramsArr,checkedVals)


    var total_performer=1;
    var current_page=1;
 $('.paginationBox').bootpag({
       total: total_performer,
       page: 1,
       maxVisible: 10,
       leaps: true,
       firstLastUse: true,
       first: '←',
       last: '→',
       wrapClass: 'pagination',
       activeClass: 'active',
       disabledClass: 'disabled',
       nextClass: 'next',
       prevClass: 'prev',
       lastClass: 'last',
       firstClass: 'first'
}).on('page', function(event, page)
{ 
current_page=page; 
update_mount()

});
 $('.paginationBox').hide();
$(document).on('click', '#reload', function(event) {
	event.preventDefault();
	current_page=1; 
	$('.paginationBox').bootpag({page: 1});
	update_mount()
});

$(document).on('click', '._tag .rmv', function(event) {
	event.preventDefault();
	let fl_key = $(this).parent('li').data('key');    	
	var index = paramsArr.findIndex(p => p.key == fl_key) 
	if(fl_key=='performer'){
		let fl_value = $(this).parent('li').data('value'); 
		let keyval = $(this).parent('li').data('keyval'); 
		 
		var array = keyval.split(','); 
		array.splice($.inArray(fl_value, array), 1);
		$("input[value='" + fl_value + "']").prop('checked', false);
		if(array.length>0){
		array=array.join(",") ;
		if(array!=''){
			let a= {
				name: 'performer',
			    key: 'performer',
			    value: array
			    } 
		 	add(paramsArr, a);
		 }
		}else{
			paramsArr.splice(index,1);
		 }

	}else{
		paramsArr.splice(index,1);
	}
	current_page=1; 
	$('.paginationBox').bootpag({page: 1});
	update_mount()
});

 
 $(document).on('click', '._filter', function(event) {
 	event.preventDefault();
 	
	let fl_key = $(this).data('key');
	let fl_val = $(this).data('value');
	let fl_name = $(this).data('name');
	let a= {
		name: fl_name,
	    key: fl_key,
	    value: fl_val
	    }
	//paramsArr.push(a)
 	add(paramsArr, a);
 	current_page=1;
 	$('.paginationBox').bootpag({page: 1});
	update_mount()

 });


$(document).on('change', '#filter_', function(event) {
	event.preventDefault();
	var fltr =$(this).val();
	if(fltr!=''){
	let a= {
		name: fltr,
	    key: 'filter',
	    value: fltr
	    }
	//paramsArr.push(a)
 	add(paramsArr, a);
 }else{
 	var index = paramsArr.findIndex(p => p.key == 'filter') 
	paramsArr.splice(index,1);
 }
	current_page=1;
 	$('.paginationBox').bootpag({page: 1});
	update_mount()
});

 


$('.filter_performer').change(function() { 
   var checkedVals = $('.filter_performer:checkbox:checked').map(function() {
    return this.value;
}).get();
 checkedVals=checkedVals.join(",") ;
if(checkedVals!=''){
	let a= {
		name: 'performer',
	    key: 'performer',
	    value: checkedVals
	    }
	//paramsArr.push(a)
 	add(paramsArr, a);
 }else{
 	var index = paramsArr.findIndex(p => p.key == 'performer') 
	paramsArr.splice(index,1);
 }
	current_page=1;
 	$('.paginationBox').bootpag({page: 1});
	update_mount()


});




 




function update_mount() {
let params=[];
var fish = {};
if(paramsArr.length>0){
$.each(paramsArr, function(index, val) {		
		let key= val.key
	   	let value =  val.value
	    fish[key] = value;
	 	params.push(fish) 	 

}); 
}
fish['page'] = current_page;
let uparams=$.param(fish); 
var index = paramsArr.findIndex(p => p.key == 'performer') ;
if(index>=0){ 

$('#s_cat').html('ALL '+paramsArr[index].name+' CAMS')	
}else{
$('#s_cat').html('')
}
fetchModels(uparams);
sorting_list()
}

function fetchModels( params) {        
let url=API_URL + 'filter/model'
if(params.trim().length >0){
	url= url+'?'+params; 
}

$.ajax({
	url: url,
	type: 'GET',
	dataType: 'json', 
})
.done(function(res) {
	
	if(res.status==true){
		$('.paginationBox').show();
		$('.paginationBox').bootpag({total:res.total_page})
		$('#performer_list').html(res.data);
		$('#_totfnd').html(res.total_perfomers);
	}
	if(res.status==false){
		$('.paginationBox').hide();
		$('.paginationBox').bootpag({total:0})
		$('#performer_list').html(res.message);
		$('#_totfnd').html(0);
	}
})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});


    }

function add(arr, name) {
  const { length } = arr; 
  const found = arr.some(el => el.key === name.key);
  if(found){
  	var index = arr.findIndex(p => p.key == name.key) 
	arr.splice(index,1);
  }
  arr.push(name);
  //if (!found) arr.push(name);
  return arr;
}

 function sorting_list() {
 	$('.shorting-list ul').empty();
 	$.each(paramsArr, function(index, val) { 

	if(val.key=='performer'){

	var array = val.value.split(',');
	for (var i = 0; i < array.length; i++) {
		
		var value = array[i].replace("_", "/");
		$('.shorting-list ul').append(	`<li class="_tag" data-key="`+val.key+`"  data-keyval="`+val.value+`" data-value="`+array[i]+`" data-name="`+array[i]+`">`+ value +` <a
		href="javascript:void(0);" class="rmv"><i class="fa fa-times-circle" aria-hidden="true"></i></a></li>`);
	}		

	}else{
		$('.shorting-list ul').append(	`<li class="_tag" data-key="`+val.key+`" data-value="`+val.value+`" data-name="`+val.name+`">`+val.name+` <a
	href="javascript:void(0);" class="rmv"><i class="fa fa-times-circle" aria-hidden="true"></i></a></li>`);
	 }
 	});

 }

  update_mount()
 
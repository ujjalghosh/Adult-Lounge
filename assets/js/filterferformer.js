 function baseUrl() {
        return window.location.origin;
    }
    var total_performer=10;
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
  console.warn(page);

//get_products(page,this)

});

    $(document).on('click', '._tag .rmv', function(event) {
    	event.preventDefault();
    	let fl_key = $(this).parent('li').data('key');
    	
    	var index = paramsArr.findIndex(p => p.key == fl_key)
console.log(index)
paramsArr.splice(index,1);
console.log(paramsArr)
update_mount()
    });

 let paramsArr = [];
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
	update_mount()
 

 });

function update_mount() {

/*let objx = {
        id    : 'myid',
        token : 'sometoken'
    };

alert($.param(paramsArr));*/


	 sorting_list()
}

function add(arr, name) {
  const { length } = arr; 
  const found = arr.some(el => el.key === name.key);
  if (!found) arr.push(name);
  return arr;
}

 function sorting_list() {
 	$('.shorting-list ul').empty();
 	$.each(paramsArr, function(index, val) { 
 	$('.shorting-list ul').append(	`<li class="_tag" data-key="`+val.key+`" data-value="`+val.value+`" data-name="`+val.name+`">`+val.name+` <a
	href="javascript:void(0);" class="rmv"><i class="fa fa-times-circle" aria-hidden="true"></i></a></li>`);
 	});

 }


 
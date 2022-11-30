const postData = {
  'test': 'akizora'
};
$.ajax({
    type: "POST",
    url: requestUrl,
    data: JSON.stringify(postData),
    contentType: 'application/json',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
     }
  }).done(function( data ) {
    console.log('done');
  }).fail(function(){
    console.log('fail');
  });

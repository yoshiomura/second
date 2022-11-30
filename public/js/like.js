function like(trainingId) {
  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    url: `/like/${trainingId}`,
    method: "POST",
    data: { "_method": "POST" }
  })
    .done(function (data, status, xhr) {
      console.log(data);
    })
    .fail(function (xhr, status, error) {
      console.log();
    });
}
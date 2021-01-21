const { isEmpty } = require("lodash")

function watchGoodEvent () {
  $('.watch-goods').click(function () {
    let goodId = $(this).attr('data-good-id')
    getGood(goodId)
  })
}

watchGoodEvent()

async function getGood(goodId) {
  await axios.get('/goods/' + goodId)
    .then((response) => {
      let myModal = new bootstrap.Modal(document.getElementById('the-good'), {keyboard: false})
      
      $("#good_name").text(response.data.name)
      $("#good_size").text(response.data.size)
      $("#good_presence").text(response.data.presence ? "присутствует" : "отсутствует")
      $("#good_sells").text(response.data.sells_since)

      $("#egood_id").val(response.data.id)
      $("#egood_name").val(response.data.name)
      $("#egood_size").val(response.data.size)
      $("#egood_presence").prop('checked', response.data.presence)
      $("#egood_sells").val(response.data.sells_since)

      myModal.show()
    })
    .catch((response) => {
      alert("Открыть не удалось")
    })
}

$('#add-good').click(function () {
  let myModal = new bootstrap.Modal(document.getElementById('edit-good'), {keyboard: false})
  $("#egood_id").val('')
  $("#egood_name").val('')
  $("#egood_size").val('')
  $("#egood_presence").prop('checked', false)
  $("#egood_sells").val('')
  myModal.show()
})

$('#save-good').click(function () {
  let goodId = $("#egood_id").val()
  if (isEmpty(goodId)) {
    axios.post('/goods', {
      name: $("#egood_name").val(),
      size: $("#egood_size").val(),
      presence: $("#egood_presence").prop('checked'),
      sells_since: $("#egood_sells").val(),      
    })
    .then((response) => {
      let newGood = $('.good-renew-inner').first().clone()
      newGood.find('.watch-goods').text(response.data.name)
      newGood.find('.watch-goods').attr('data-good-id', response.data.id)
      newGood.appendTo("#good-renew")
      watchGoodEvent()
      alert("Товар успешно добавлен")
    })
    .catch((response) => {
    })
  } else {
    axios.put('/goods/' + goodId, {
      id: goodId,
      name: $("#egood_name").val(),
      size: $("#egood_size").val(),
      presence: $("#egood_presence").prop('checked'),
      sells_since: $("#egood_sells").val(),      
    })
    .then((response) => {
      alert("Товар успешно отредактирован")      
    })
    .catch((response) => {
    })
  }  
})

$('#good_delete').click(function() {
  let goodId = $("#egood_id").val()
  axios.post('/goods/'+goodId, {
    _method: 'delete'
  })
  .then((response) => {
    $('[data-good-id='+goodId+']').parents('.good-renew-inner').remove()
  })
})
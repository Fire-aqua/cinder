const { isEmpty } = require("lodash")

function seltagEvent() {
    $('.seltag').click(function() {
        this.remove()
    })
}

seltagEvent()

$("#select_tag_btn").click(function() {
    let tagId = $("#select_tag :selected").val()
    let tagName = $("#select_tag :selected").text()
    let htmlTag = $("#selected_tag").html()
    $("#selected_tag").html(htmlTag+'<span data-id="'+tagId+'" class="badge bg-info seltag">'+tagName+'</span>')
    seltagEvent()
})

$("#save_post").click(function() {
    savePost()
})

function savePost() {
    let ids = []
    $('.seltag').each((index, element) =>  {
        ids.push($(element).data('id'))
    })
    let postId = $("#post_id").val()
    if (isEmpty(postId)) {
        axios.post('/posts', {
            title: $("#post_title").val(),
            body: $("#post_body").val(),
            tags: ids,
        })
        .then((response) => {
            window.location.replace('/posts/'+response.data.id+'/edit')
            alert("Пост успешно создан")
        })
        .catch(() => {
            alert("Сохранить не удалось")
        })
    } else {
        axios.put('/posts/'+postId, {
            id: postId,
            title: $("#post_title").val(),
            body: $("#post_body").val(),
            tags: ids,
        })
        .then((response) => {
            $("#post_title").val(response.data.title)
            $("#post_body").val(response.data.body)
            alert("Пост успешно отредактирован")
        })
        .catch(() => {
            alert("Сохранить не удалось")
        })
    }
}
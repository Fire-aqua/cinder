$("#save_user").click(function() {
    saveUserData()
})

function saveUserData() {
    axios.post('/user', {
        fname: $("#user_fullname").val(),
        birthday: $("#user_birthday").val(),
    })
    .then(() => {
        alert("Данные успешно сохранены")
    })
    .catch(() => {
        alert("Сохранить не удалось")
    })
}

$("#download_user_avatar_opener").click(function() {
    downloadUserAvatarOpener()
})

// function downloadUserAvatarOpener() {
//         axios.post('/',
//         {})
//         .then(() => {
            
//         })
//         .catch(() => {
//             alert("Сохранить не удалось")
//         })
//     }

$("#download_user_avatar").click(function() {
    downloadUserAvatar()
})

// function downloadUserAvatar() {
//     axios.post('/',
//     {})
//     .then(() => {
        
//     })
//     .catch(() => {
//         alert("Сохранить не удалось")
//     })
// }
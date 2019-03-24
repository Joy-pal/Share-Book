<template>
    <div class="container container-main">
        <div class="profile-header-part">
            <img src="../assets/profile.jpg" class="immg" alt="Paris" >
            <strong class="profile-title">Joy Kumar Pal</strong>
            <button type="button" class="btn btn-light edit-profile-button">Edit Profile</button>
        </div>
        <div class="profile-body-part row">
            <div class="col-md-4 bg-light " style="height: 520px;">
               <p class="py-2 my-2"> <i class="material-icons">
                   email
               </i> email@company.com</p>
                <p class="py-2 my-2"><i class="material-icons">
                    store
                </i> 109/5, West-Rayerbazzar, Dhanmondi</p>
                <p class="py-2 my-2"><i class="material-icons">
                    settings_phone</i> +88019239272992 </p>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-7 bg-light overflow-auto" style="height: 520px; padding-top: 20px; overflow: auto;">
                <div class="card mb-3 "v-for="img in imgs" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img v-bind:src="img.url " class="card-img" alt=" ">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .container-main{
        min-height: 100vh;
    }
    .profile-header-part{
        min-height: 400px;
        background-image: url("../assets/book.jpg");
        background-repeat: repeat;
        background-position: center;
        background-size: cover;

    }
        .immg{
        width:150px;
        border: 3px solid #fff;
        border-radius: 96px;
        width: 150px;
        position: relative;
        margin-top: 235px;
        margin-left: 20px;
    }
.profile-title{
    font-size: 30px;
    font-family: inherit;
    /* color: wheat; */
    margin-top: 328px;
    /* margin-top: 29px; */
    padding: 10PX;
    color: white;
    position: absolute;
    margin-left: 38px;
    background-color: rgba(0, 0, 0, 0.09);
}

    .edit-profile-button{
        float: right;
        margin-top:344px;
        margin-right: 20px;
    }
    .profile-body-part{
        margin: 0;
    }
</style>
<script>
    export default {
        data(){
            return {

                imgs:[
                    { url : "https://placeimg.com/200/200/any?4"},
                    { url : "https://placeimg.com/200/200/any?4"},
                    { url : "https://placeimg.com/200/200/any?4"},
                    { url : "https://placeimg.com/200/200/any?4"},
                    { url : "https://placeimg.com/200/200/any?4"},
                ]

            }
        }
    }
</script>

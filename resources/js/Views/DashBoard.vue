 <template>
     <div class="main-container my-2">
         <div class="main-container-header">
             <div class="dashboard-header border-top">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-8" style="padding: 0;">
                             <nav class="nav">
                                 <router-link :to="{ name: 'Dashboard' }" class="nav-link border-left border-right nav-item-link">
                                     <i class="material-icons">home</i> Home
                                 </router-link>
                                 <router-link :to="{ name: 'Profile' }" class="nav-link nav-item-link">
                                     <i class="material-icons">face</i> Profile
                                 </router-link>
                                 <a class="nav-link border-left border-right nav-item-link" href="#">
                                     <i class="material-icons">link</i> Link
                                 </a>
                                 <a class="nav-link border-right nav-item-link" href="#">
                                     <i class="material-icons">contacts</i> Contact
                                 </a>
                                 <div class="btn-group dropright">
                                     <!--<button type="button" class="btn btn-secondary">-->
                                         <!--<i class="material-icons">scatter_plot</i>-->
                                     <!--</button>-->
                                     <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <span class="sr-only">Toggle Dropright</span>
                                     </button>
                                     <div class="dropdown-menu">
                                         <router-link :to="{ name: 'Login' }" class="nav-link nav-item-link border-right">    Login   </router-link>
                                         <router-link :to="{ name: 'Registration' }" class="nav-link nav-item-link border-right">    Registration    </router-link>
                                     </div>
                                 </div>
                             </nav>
                         </div>
                         <div class="col-sm-4">
                             <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Book's name" aria-label="Recipient's username"
                                        aria-describedby="basic-addon2">
                                 <div class="input-group-append">
                                     <span class="input-group-text" id="headerSearchBtn">
                                         <i class="material-icons">search</i>
                                     </span>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
         <div class="container">
             <section class="text-center text-dark  my-5 mx-5 ">
                 <h4 class="font-weight-bold">
                     Welcome to our
                     <span style="color: red;"> Share-Book  </span>
                     website. Take a second and explore it.
                 </h4>
                 <section class="text-center text-dark  ">
                 <p >
                     We proudly present you Metropolis, very clean corporate theme which is perfect for company website. Metropolis comes with lot of options regarding color styles and different layouts.
                 </p>
             </section>
             </section>
         </div>
         <div class="container" >
             <button type="button" class="btn btn-primary btn-lg create-post-button">Add Book</button>
         </div>
         <div class="container-fluid ">
             <div class="row blog   py-5">
                 <div class="container ">
                     <section class="text-center book-container-title my-3 row" >
                          <div class="col-md-4">
                              <span class="float-right text-center top-rated-book-icon"><i class="material-icons">fiber_manual_record</i></span>
                          </div>
                           <div class="text-center col-md-4">
                               <h4 class="font-weight-bold ">{{ books_category }}</h4>
                               <span> These books are top rated. </span>
                           </div>
                         <div class="col-md-4  "><span class="float-left text-center top-rated-book-icon"><i class="material-icons">fiber_manual_record</i></span></div>
                     </section>
                 </div>
                 <div class="col-md-12">
                     <carousel :autoplay="true" :nav="false" >

                     <div class="card" style="margin: 10px; width: 300px;" v-for="u in urls">
                         <img v-bind:src="u.url" class="card-img-top" alt="img">
                         <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="#" class="btn btn-primary">Go somewhere</a>
                         </div>
                     </div>

                     </carousel>
                 </div>
             </div>
         </div>
         <div class="container">

         </div>
     </div>

 </template>
 <style lang="scss" scoped>

     small {
         display: block;
     }

     .top-rated-book-icon{
         margin-top: 15px;
     }
     .owl-item-active{
         width: 10px;
     }
 </style>
 <script>
     import carousel from 'vue-owl-carousel'
     export default {
         data(){
             return {
                 imagesrc: "./background.jpg",
                 urls   : [
                     {
                         url : "https://placeimg.com/200/200/any?4",
                         title : 'Book Title',
                         description : 'Sharing book also helps you to fell praised.'
                     },
                     {
                         url : "https://placeimg.com/200/200/any?4",
                         title : 'Book Title',
                         description : 'Sharing book also helps you to fell praised.'
                     },
                     {
                         url : "https://placeimg.com/200/200/any?4",
                         title : 'Book Title',
                         description : 'Sharing book also helps you to fell praised.'
                     },
                     {
                         url : "https://placeimg.com/200/200/any?4",
                         title : 'Book Title',
                         description : 'Sharing book also helps you to fell praised.'
                     }
                 ],
                 books_category: 'Top Books',


             }
         },
         components: { carousel,

         },
    methods:{
        moveForDetail(){
            this.$router.push('Book-Detail');
        }
    }
     }
 </script>

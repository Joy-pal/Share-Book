  <template>
    <div class="row book-details-container">
        <div class="col-md-4 px-5 bg-light border">
            <h3 class="text-primary" style="margin-top: 20px;" > Gitanjali </h3>
            <strong class="my-2 border-bottom"> Robindranath Tagore <a href="#" class="badge badge-warning float-right">old</a></strong>

            <div class="row my-2 border-bottom text-white my-2">
                <div class="book-image col-md-2 ">
                </div>
                <div class="book-image col-md-8 align-items-center">
                    <img src="../assets/icons/gitanjali.jpg"/>
                </div>
                <div class="book-image col-md-2">

                </div>
            </div>
               <table>
                   <tbody>
                   <tr>
                       <td> </td>
                       <td class="float-right">  </td>
                   </tr>
                   <tr> <td>  </td> </tr>
                   <tr> <br/> </tr>
                   <tr> <td> Book Price : <strong> $ 5 &nbsp;</strong> </td>
                        <td> <input type="checkbox" checked class="border "/>  Negotiaable </td>
                   </tr>
                   <tr> <td> <strong>Published At : </strong> </td>
                       <td> <strong>  10/02/1997</strong> </td>
                   </tr>
                   <tr> <br/> </tr>
                   <tr> <td> <button type="button" class="btn btn-primary"> <i class="material-icons">thumb_up</i>  <span class="badge badge-light"> 9 </span> </button> </td>
                       <td> <button type="button" class="btn btn-primary"> <i class="material-icons">thumb_down</i> <span class="badge badge-light">9</span> </button> </td>
                   </tr>
                   <tr> <br/> </tr>
                   </tbody>
               </table>
            <button type="button" class="btn btn-primary text-center mx-3 my-5 align-bottom">
                <i class="material-icons">
                    person
                </i> <span class="badge "> Joy Kumar Pal </span>
            </button>
        </div>
        <div class="col-md-8 bg-white mx-0 px-0 border-top ">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="decs-tab" data-toggle="tab" href="#decs" role="tab" aria-controls="home" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="comment-tab" data-toggle="tab" href="#comment" role="tab" aria-controls="comment" aria-selected="false">Comments</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-2 p-5 " id="decs" role="tabpanel" aria-labelledby="decs-tab">
                    <h4 class="border-bottom">{{title}}</h4>
                    {{description}}
                </div>
                <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="comment-tab">
                    <br/>
                    <!-- Image and text -->
                    <nav class="navbar navbar-light border px-0 mx-3 row comment-row ">
                        <i class="material-icons col-md-2"> person </i>
                        <p class="col-md-10"> {{comment}} </p>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {

                title :' Gitanjali',
                description : 'In incididunt echo park, officia deserunt mcsweeney\'s proident master \n' +
                    '                        cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. \n' +
                    '                        Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably \n' +
                    '                        haven\'t heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh \n' +
                    '                        eu banh mi sustainable. Elit wolf voluptate,\n' +
                    '                        lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.',
                comment : 'In incididunt echo park, officia deserunt mcsweeney\'s proident master'
            }
        },
        methods:{

        },
    }

</script>

<template>
   <div class="row login-main-card">
       <div class="col-md-4"></div>
       <div class="col-md-4 ">

          <div class="card text-center rounded-bottom py-5 px-5">
             <div class="card-header">
               <span class="font-weight-bold">
                   <i class="material-icons ">account_circle</i> &nbsp;Login
               </span>
             </div>
             <div class="card-body">
                 <form>
                     <div class="form-group">
                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                     </div>
                     <div class="form-group">
                         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                     </div>
                     <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1">Check me out</label>
                     </div>
                 </form>
             </div>
                  <router-link :to="{ name: 'Registration' }" > Register <i class="material-icons  py-3 ">person_add</i> </router-link>

             <div class="card-footer text-muted">
                 <button type="button" class="btn btn-primary btn-lg btn-block">Login</button>
             </div>
          </div>
       </div>
       <div class="col-md-4"></div>
   </div>
</template>

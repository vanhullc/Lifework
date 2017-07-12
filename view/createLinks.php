<script type="text/javascript" src="ajax/createLinks.js"></script>

<div class="wrapper container" role="content" id="home">
  <div class="row" id="Card">
     <div class="col s12 m8 offset-m2 l6 offset-l3">
       <div class="card-panel z-depth-1 white">

        <div class="row">
          <form class="col s12" id="accountForm" method="post">
            <div class="row">
              <h1 style="center">New Link</h1>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="Title" type="text" class="validate" required>
                <label for="Title">Title</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="Link" type="text" class="validate" required>
                <label for="Link">Link</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="Date" type="date" class="datepicker" required>
                <label for="Date">Date</label>
              </div>
            </div>

            <button class="btn red darken-4 waves-effect waves-light" type="submit" name="action">Create
             <i class="material-icons right">send</i>
           </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

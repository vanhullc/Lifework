<script type="text/javascript" src="ajax/createProfile.js"></script>

<div class="wrapper container" role="content" id="home">
  <div class="row" id="Card">
     <div class="col s12 m8 offset-m2 l6 offset-l3">
       <div class="card-panel z-depth-1 white">

        <div class="row">
          <form class="col s12" id="accountForm" method="post">
            <div class="row">
              <h1 style="center">New Artist</h1>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="Name" type="text" class="validate" required>
                <label for="Name">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="Pic" type="text" class="validate" required>
                <label for="Pic">Picture link</label>
              </div>
            </div>
            <div class="row">
              <h1 style="center">First link</h1 required>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="Title" type="text" class="validate" required>
                <label for="Title">Title</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="Uri" type="text" class="validate" required>
                <label for="Uri">Link</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="Date" type="date" class="datepicker" required>
                <label for="Date">Date</label>
              </div>
            </div>
            <button class="btn red darken-4 waves-effect waves-light" id="accountButton" type="submit">Create
             <i class="material-icons right">send</i>
           </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

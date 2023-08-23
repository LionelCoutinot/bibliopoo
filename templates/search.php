    <?php $this->title = 'Recherche-Biblio'; ?> 
    <div class="container">
	    <h1 class="text-center my-5">Recherche</h1>
        <div class="row">
            <section class="col-5">
                <form method="post" action="../public/index.php?route=searchResult">
                    <div class="form-group">
                        <label for="ouvrage">Un auteur, un titre, une partie de titre, un sujet...</label>
                        <input type="text" id="ouvrage" name="ouvrage" class="form-control">
                    </div>
                    <input type="hidden"  name="id">
                    <button class="btn btn-success mt-5">Envoyer</button>
                </form>
            </section>
        </div>
</div>


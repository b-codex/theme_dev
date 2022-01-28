<form role="search" method="get" action="<?php echo home_url('/'); ?>">

    <fieldset>
        <div class="row g-3 align-items-center">

          <div class="col-auto">
            <input type="text" id="search" class="form-control" value="<?php the_search_query(); ?>" aria-describedby="search text">
          </div>
          
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </fieldset>
</form>

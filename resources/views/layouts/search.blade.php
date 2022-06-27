 <form action="{{ route('usuarios.index') }}" method="GET" class="d-none d-lg-inline-block form-inline ml-auto ml-md-0 my-4 my-md-4 mw-100 navbar-search">
     <div class="input-group">
         <input type="text" class="form-control bg-light border-3 small" placeholder="Search for..." aria-label="Search"
             aria-describedby="basic-addon2" name="texto" value="{{ $texto }}">
         <div class="input-group-append">
             <button type="submit" class="btn btn-primary" value="buscar">
                <i class="fas fa-search fa-sm"></i>
             </button>
         </div>
     </div>
 </form>

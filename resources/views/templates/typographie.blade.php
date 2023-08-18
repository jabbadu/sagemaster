{{--
    Template Name: Typographie
--}}
@extends('layouts.fullwidth')

@section('content')
{{-- <x-heading class="display-4 text-uppercase">Elemente</x-heading> --}}

 <div class="section py-5">
     <h2>Typographie</h2>
     <div class="row row-cols-3">
         <div class="col">
             <h1>Heading 1</h1>
             <h2>Heading 2</h2>
             <h3>Heading 3</h3>
             <h4>Heading 4</h4>
             <h5>Heading 5</h5>
             <h6>Heading 6</h6>
             <h3 class="text-primary">Heading primary <small class="text-muted">with muted text</small></h3>
             <h3 class="text-secondary">Heading secondary <small class="text-muted">with muted text</small></h3>
             <h3 class="text-success">Heading success <small class="text-muted">with muted text</small></h3>
             <h3 class="text-danger">Heading danger <small class="text-muted">with muted text</small></h3>
             <h3 class="text-warning">Heading warning <small class="text-muted">with muted text</small></h3>
             <h3 class="text-info">Heading info <small class="text-muted">with muted text</small></h3>
             <h3 class="text-dark">Heading dark <small class="text-muted">with muted text</small></h3>
             <h3 class="text-light">Heading light <small class="text-muted">with muted text</small></h3>
         </div>

         <div class="col">
             <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
             <h2>Example body text</h2>
             <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
             <p><small>This line of text is meant to be treated as fine print.</small></p>
             <p>The following is <strong>rendered as bold text</strong>.</p>
             <p>The following is <em>rendered as italicized text</em>.</p>
             <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>        
         </div>

         <div class="col">
             <h2>Emphasis classes</h2>
             <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
             <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
             <p class="text-secondary">Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
             <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
             <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
             <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
             <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>        
         </div>
     </div>
 </div>

 <div class="section py-5">
        
     <h2>Buttons</h2>
     <div class="row">
         <div class="col">
             <button type="button" class="btn btn-outline-primary">Primary</button>
             <button type="button" class="btn btn-outline-secondary">Secondary</button>
             <button type="button" class="btn btn-outline-success">Success</button>
             <button type="button" class="btn btn-outline-danger">Danger</button>
             <br> <br>
             <button type="button" class="btn btn-outline-warning">Warning</button>
             <button type="button" class="btn btn-outline-info">Info</button>
             <button type="button" class="btn btn-outline-light">Light</button>
             <button type="button" class="btn btn-outline-dark">Dark</button>
         </div>

         <div class="col">
             <button type="button" class="btn btn-primary">Primary</button>
             <button type="button" class="btn btn-secondary">Secondary</button>
             <button type="button" class="btn btn-success">Success</button>
             <button type="button" class="btn btn-info">Info</button>
             <br> <br>
             <button type="button" class="btn btn-warning">Warning</button>
             <button type="button" class="btn btn-danger">Danger</button>
             <button type="button" class="btn btn-light">Light</button>
             <button type="button" class="btn btn-dark">Dark</button>
             <button type="button" class="btn btn-link">Link</button>
         </div>
     </div>
 </div>

 <div class="section py-5">
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" href="#">Home
                    <span class="visually-hidden">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-dark my-3" data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home
                <span class="visually-hidden">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>
            </ul>
            <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-light mb-3" data-bs-theme="light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home
                <span class="visually-hidden">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>
            </ul>
            <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor04">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
</div>

 <div class="section py-5">
     <h2>Alerts</h2>

     <div class="alert alert-dismissible alert-primary">
         <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         <h4 class="alert-heading">Primary!</h4>
         <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
     </div>

     <div class="alert alert-dismissible alert-secondary">
         <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         <h4 class="alert-heading">Secondary!</h4>
         <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
     </div>

     <div class="alert alert-dismissible alert-success">
         <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         <h4 class="alert-heading">Success!</h4>
         <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
     </div>

     <div class="alert alert-dismissible alert-warning">
         <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         <h4 class="alert-heading">Warning!</h4>
         <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
     </div>

     <div class="alert alert-dismissible alert-danger">
         <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         <h4 class="alert-heading">Danger!</h4>
         <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
     </div>

     <div class="alert alert-dismissible alert-light">
         <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         <h4 class="alert-heading">Light!</h4>
         <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
     </div>

     <div class="alert alert-dismissible alert-dark">
         <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         <h4 class="alert-heading">Dark!</h4>
         <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
     </div>
 </div>

 <div class="section py-5">
     <h2>Badges</h2>
     <span class="badge bg-primary">Primary</span>
     <span class="badge bg-secondary">Secondary</span>
     <span class="badge bg-success">Success</span>
     <span class="badge bg-danger">Danger</span>
     <span class="badge bg-warning">Warning</span>
     <span class="badge bg-info">Info</span>
     <span class="badge bg-light">Light</span>
     <span class="badge bg-dark">Dark</span>

     <br> <br>

     <span class="badge rounded-pill bg-primary">Primary</span>
     <span class="badge rounded-pill bg-secondary">Secondary</span>
     <span class="badge rounded-pill bg-success">Success</span>
     <span class="badge rounded-pill bg-danger">Danger</span>
     <span class="badge rounded-pill bg-warning">Warning</span>
     <span class="badge rounded-pill bg-info">Info</span>
     <span class="badge rounded-pill bg-light">Light</span>
     <span class="badge rounded-pill bg-dark">Dark</span>
 </div>

 <div class="section py-5">
     <h2>Tabellen</h2>
     <table class="table table-hover">
         <thead>
             <tr>
                 <th scope="col">Type</th>
                 <th scope="col">Column heading</th>
                 <th scope="col">Column heading</th>
                 <th scope="col">Column heading</th>
             </tr>
         </thead>
         <tbody>
             <tr class="table-active">
                 <th scope="row">Active</th>
                 <td>Column content</td>
                 <td>Column content</td>
                 <td>Column content</td>
             </tr>
             <tr>
                 <th scope="row">Default</th>
                 <td>Column content</td>
                 <td>Column content</td>
                 <td>Column content</td>
             </tr>
             <tr class="table-primary">
                 <th scope="row">Primary</th>
                 <td>Column content</td>
                 <td>Column content</td>
                 <td>Column content</td>
             </tr>
             <tr class="table-secondary">
                 <th scope="row">Secondary</th>
                 <td>Column content</td>
                 <td>Column content</td>
                 <td>Column content</td>
             </tr>
             <tr class="table-success">
                 <th scope="row">Success</th>
                 <td>Column content</td>
                 <td>Column content</td>
                 <td>Column content</td>
             </tr>
             <tr class="table-danger">
                 <th scope="row">Danger</th>
                 <td>Column content</td>
                 <td>Column content</td>
                 <td>Column content</td>
             </tr>
             <tr class="table-warning">
                 <th scope="row">Warning</th>
                 <td>Column content</td>
                 <td>Column content</td>
                 <td>Column content</td>
             </tr>
             <tr class="table-info">
                 <th scope="row">Info</th>
                 <td>Column content</td>
                 <td>Column content</td>
                 <td>Column content</td>
             </tr>
             <tr class="table-light">
                 <th scope="row">Light</th>
                 <td>Column content</td>
                 <td>Column content</td>
                 <td>Column content</td>
             </tr>
             <tr class="table-dark">
                 <th scope="row">Dark</th>
                 <td>Column content</td>
                 <td>Column content</td>
                 <td>Column content</td>
             </tr>
         </tbody>
     </table>
 </div>

 <div class="section py-5">
     <h2>Breadcrumbs</h2>
     <ol class="breadcrumb">
         <li class="breadcrumb-item active">Home</li>
         </ol>
         <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="#">Home</a></li>
         <li class="breadcrumb-item active">Library</li>
         </ol>
         <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="#">Home</a></li>
         <li class="breadcrumb-item"><a href="#">Library</a></li>
         <li class="breadcrumb-item active">Data</li>
     </ol>
 </div>

 <div class="section py-5">
     <h2>Formulare</h2>

     <form>
         <fieldset>
             <legend>Legend</legend>
             <div class="form-group row">
             <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
             <div class="col-sm-10">
                 <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
             </div>
             </div>
             <div class="form-group">
             <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
             </div>
             <div class="form-group">
             <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
             </div>
             <div class="form-group">
             <label for="exampleSelect1" class="form-label mt-4">Example select</label>
             <select class="form-select" id="exampleSelect1">
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5</option>
             </select>
             </div>
             <div class="form-group">
             <label for="exampleSelect2" class="form-label mt-4">Example multiple select</label>
             <select multiple="" class="form-select" id="exampleSelect2">
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5</option>
             </select>
             </div>
             <div class="form-group">
             <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
             <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
             </div>
             <div class="form-group">
             <label for="formFile" class="form-label mt-4">Default file input example</label>
             <input class="form-control" type="file" id="formFile">
             </div>
             <fieldset class="form-group">
             <legend class="mt-4">Radio buttons</legend>
             <div class="form-check">
                 <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                 <label class="form-check-label" for="optionsRadios1">
                 Option one is this and that—be sure to include why it's great
                 </label>
             </div>
             <div class="form-check">
                 <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                 <label class="form-check-label" for="optionsRadios2">
                 Option two can be something else and selecting it will deselect option one
                 </label>
             </div>
             <div class="form-check disabled">
                 <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                 <label class="form-check-label" for="optionsRadios3">
                 Option three is disabled
                 </label>
             </div>
             </fieldset>
             <fieldset class="form-group">
             <legend class="mt-4">Checkboxes</legend>
             <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                 <label class="form-check-label" for="flexCheckDefault">
                 Default checkbox
                 </label>
             </div>
             <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                 <label class="form-check-label" for="flexCheckChecked">
                 Checked checkbox
                 </label>
             </div>
             </fieldset>
             <fieldset class="form-group">
             <legend class="mt-4">Switches</legend>
             <div class="form-check form-switch">
                 <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                 <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
             </div>
             <div class="form-check form-switch">
                 <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                 <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
             </div>
             </fieldset>
             <fieldset class="form-group">
             <legend class="mt-4">Ranges</legend>
                 <label for="customRange1" class="form-label">Example range</label>
                 <input type="range" class="form-range" id="customRange1">
                 <label for="disabledRange" class="form-label">Disabled range</label>
                 <input type="range" class="form-range" id="disabledRange" disabled="">
                 <label for="customRange3" class="form-label">Example range</label>
                 <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
             </fieldset>
             <button type="submit" class="btn btn-primary">Submit</button>
         </fieldset>
     </form>
 </div>

 <div class="section py-5">
     <h2>Akkordeon</h2>
     <div class="accordion" id="accordionExample">
         <div class="accordion-item">
             <h2 class="accordion-header" id="headingOne">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                 Accordion Item #1
             </button>
             </h2>
             <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
             <div class="accordion-body">
                 <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
             </div>
             </div>
         </div>
         <div class="accordion-item">
             <h2 class="accordion-header" id="headingTwo">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 Accordion Item #2
             </button>
             </h2>
             <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
             <div class="accordion-body">
                 <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
             </div>
             </div>
         </div>
         <div class="accordion-item">
             <h2 class="accordion-header" id="headingThree">
             <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                 Accordion Item #3
             </button>
             </h2>
             <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
             <div class="accordion-body">
                 <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
             </div>
             </div>
         </div>
     </div>
 </div>

 <div class="section py-5">
     <h2>Offcanvas</h2>
     <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
         Link with href
         </a>
         <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
         Button with data-bs-target
         </button>
         <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
         <div class="offcanvas-header">
             <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
             <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
             <div>
             Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
             </div>
             <div class="dropdown mt-3">
             <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                 Dropdown button
             </button>
             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <li><a class="dropdown-item" href="#">Action</a></li>
                 <li><a class="dropdown-item" href="#">Another action</a></li>
                 <li><a class="dropdown-item" href="#">Something else here</a></li>
             </ul>
             </div>
         </div>
     </div>
 </div>

 <div class="section py-5">
     <h2>Cards</h2>
     <div class="row">
         <div class="col-lg-4">
             <div class="bs-component">
             <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Primary card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Secondary card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Success card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Danger card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Warning card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Info card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card bg-light mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Light card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Dark card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             </div>
         </div>
         <div class="col-lg-4">
             <div class="bs-component">
             <div class="card border-primary mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Primary card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card border-secondary mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Secondary card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card border-success mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Success card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card border-danger mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Danger card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card border-warning mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Warning card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card border-info mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Info card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card border-light mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Light card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             <div class="card border-dark mb-3" style="max-width: 20rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                 <h4 class="card-title">Dark card title</h4>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
             </div>
             </div>
         </div>

         <div class="col-lg-4">
             <div class="bs-component">
             <div class="card mb-3">
                 <h3 class="card-header">Card header</h3>
                 <div class="card-body">
                     <h5 class="card-title">Special title treatment</h5>
                     <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                 </div>
                 <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                     <rect width="100%" height="100%" fill="#868e96"></rect>
                     <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                 </svg>
                 <div class="card-body">
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                 <ul class="list-group list-group-flush">
                     <li class="list-group-item">Cras justo odio</li>
                     <li class="list-group-item">Dapibus ac facilisis in</li>
                     <li class="list-group-item">Vestibulum at eros</li>
                 </ul>
                 <div class="card-body">
                     <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                 </div>
                 <div class="card-footer text-muted">
                     2 days ago
                 </div>
             </div>
             <div class="card">
                 <div class="card-body">
                 <h4 class="card-title">Card title</h4>
                 <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="card-link">Card link</a>
                 <a href="#" class="card-link">Another link</a>
                 </div>
             </div>
             </div>
         </div>
     </div>
 </div>

 <div class="section py-5">
     <h2>Pagination</h2>
     <div class="row">
         <div class="col">
             <ul class="pagination">
                 <li class="page-item disabled">
                 <a class="page-link" href="#">&laquo;</a>
                 </li>
                 <li class="page-item active">
                 <a class="page-link" href="#">1</a>
                 </li>
                 <li class="page-item">
                 <a class="page-link" href="#">2</a>
                 </li>
                 <li class="page-item">
                 <a class="page-link" href="#">3</a>
                 </li>
                 <li class="page-item">
                 <a class="page-link" href="#">4</a>
                 </li>
                 <li class="page-item">
                 <a class="page-link" href="#">5</a>
                 </li>
                 <li class="page-item">
                 <a class="page-link" href="#">&raquo;</a>
                 </li>
             </ul>
         </div>
         <div class="col">
             <h2>Tabs</h2>
             <ul class="nav nav-tabs" role="tablist">
                 <li class="nav-item" role="presentation">
                     <a class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="true" role="tab">Home</a>
                 </li>
                 <li class="nav-item" role="presentation">
                     <a class="nav-link" data-bs-toggle="tab" href="#profile" aria-selected="false" role="tab" tabindex="-1">Profile</a>
                 </li>
                 <li class="nav-item" role="presentation">
                     <a class="nav-link disabled" href="#" aria-selected="false" tabindex="-1" role="tab">Disabled</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                     <div class="dropdown-menu" style="">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Separated link</a>
                     </div>
                 </li>
                 </ul>
                 <div id="myTabContent" class="tab-content">
                 <div class="tab-pane fade active show" id="home" role="tabpanel">
                     <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                 </div>
                 <div class="tab-pane fade" id="profile" role="tabpanel">
                     <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                 </div>
                 <div class="tab-pane fade" id="dropdown1">
                     <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                 </div>
                 <div class="tab-pane fade" id="dropdown2">
                     <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="section py-5">
     <h2>Spinners</h2>

     <div class="spinner-border text-primary" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-border text-secondary" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-border text-success" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-border text-danger" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-border text-warning" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-border text-info" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-border text-light" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-border text-dark" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>

     <br> <br>

     <div class="spinner-grow text-primary" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-grow text-secondary" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-grow text-success" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-grow text-danger" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-grow text-warning" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-grow text-info" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-grow text-light" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
     <div class="spinner-grow text-dark" role="status">
         <span class="visually-hidden">Loading...</span>
     </div>
 </div>

 <div class="section py-5">
     <h2>Placeholder</h2>
     <div class="row">
         <div class="col-4">
             <div class="card">
                 <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#20c997"></rect></svg>
                 <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
             </div>
         </div>

         <div class="col-4">
             <div class="card" aria-hidden="true">
                 <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
                 <div class="card-body">
                     <h5 class="card-title placeholder-glow">
                     <span class="placeholder col-6"></span>
                     </h5>
                     <p class="card-text placeholder-glow">
                     <span class="placeholder col-7"></span>
                     <span class="placeholder col-4"></span>
                     <span class="placeholder col-4"></span>
                     <span class="placeholder col-6"></span>
                     <span class="placeholder col-8"></span>
                     </p>
                     <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                 </div>
             </div>
         </div>
     </div>
 </div>

 {{-- <div class="section py-5">
     <x-image src="https://via.placeholder.com/1920x350" caption="UNSERE HAUPTZENTRALE IN FRANKFURT AM MAIN" />
 </div> --}}

 {{-- <div class="section py-5">
     <div class="row">
         <div class="col-4">
             <x-card 
                 title="lorem" 
                 header="ipsum" 
                 img-src="https://via.placeholder.com/1920x350" 
                 type="dark"
                 :button="['url' => 'https://google.com', 'title' => 'lorem ipsum button text']">
                 Card Content
             </x-card>
         </div>

         <div class="col-4">
             <x-card
                 title="lorem" 
                 header="ipsum" 
                 img-src="https://via.placeholder.com/1920x350" 
                 type="light"
                 :button="['url' => 'https://google.com', 'title' => 'lorem ipsum button text']">
                 Card Content
             </x-card>
         </div>

         <div class="col-4">
             <x-card
                 title="lorem" 
                 header="ipsum" 
                 img-src="https://via.placeholder.com/1920x350" 
                 :button="['url' => 'https://google.com', 'title' => 'lorem ipsum button text']">
                 Card Content
             </x-card>
         </div>

     </div>
        
 </div> --}}

  {{-- /.container --}}
 @endsection
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../lib/css/ctc.css">
     <!-- Bootstrap CSS -->
  <title>TEMPLATE CTC</title>

</head>

<body>
  <div class="container">
    <div class="row card">
          <div class="col-lg-12 card-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">REQUISITION</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ol class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="template.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Departement <span class="badge bg-secondary">Logistique</span> </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" tabindex="-1" > Bievenue <span class="badge bg-secondary">Fabrice Makindu</span></a>
                    </li>
                  </ol>
                  <form class="d-flex">
                    <input class="form-control mr-2" type="search" placeholder="Recherche..." aria-label="Search">
                    <button class="btn btn-outline-success btn-sm" type="submit">Rechercher</button>
                  </form>
                  <div class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        User
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Modifier Profil</a></li>
                        <li><a class="dropdown-item" href="#">Autres</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Deconnexion</a></li>
                      </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
          <div class="col-lg-12 card-body">

              <div class="row">
                  <div class="col-lg-2">
                      <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">MENU</li>
                        <li class="list-group-item"> S-Menu 1</li>
                        <li class="list-group-item"> S-Menu 2</li>
                        <li class="list-group-item"> S-Menu 3</li>
                        <li class="list-group-item"> S-Menu 4</li>
                      </ul>
                  </div>
                  <div class="col-lg-7">
                      
                        <div class="row">
                              <div class="col-lg-12">
                                <div class="card">
                                  <h5 class="card-header">Nouvelle requisition </h5>
                                  <div class="card-body">
                                    <form class="form visually-hidden" id="requisitionForm">
                                      <div class="mb-3">
                                           <label class="form-label">Type Requisition</label>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                              Normal
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                              Urgent
                                            </label>
                                          </div>
                                      </div>
                                      <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="request_description" rows="3" autofocus></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label for="montant" class="form-label">Montant</label>
                                        <input type="number" class="form-control" id="request_montant" placeholder="montant">
                                      </div>
                                      <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Enregistrer</button> <button style="float:center;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ajouter Details</button>
                                      </div>
                                      
                                    </form>
                                    <span style="float:right;" href="#" class="btn btn-info" state="closed" IdToRemove="requisitionForm" onclick="Requisition.RemoveHiddenClass(this)">Nouvelle Requisition</span>
                                  </div>
                                </div>
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Ajout des details requisition</h5>
                                          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                  <form class="form">
                                                    <div class="mb-3">
                                                      <label for="detail_description" class="col-form-label">Description:</label>
                                                      <input type="text" class="form-control" id="detail_description" onBlur="Requisition.CheckValue(this)" />
                                                    </div>
                                                    <div class="mb-3">
                                                      <label for="detail_qte" class="col-form-label">Qte:</label>
                                                      <input type="number" class="form-control" id="detail_qte" onBlur="Requisition.CheckValue(this)" />
                                                    </div>
                                                    <div class="mb-3">
                                                      <label for="detail_pu" class="col-form-label">Pu:</label>
                                                      <input type="number" class="form-control" id="detail_pu" onBlur="Requisition.CheckValue(this)" />
                                                    </div>
                                                    <div class="mb-3">
                                                      <span class="btn btn-primary cursorPointer" onclick="Requisition.NewRetailRequest(this)">Ajouter</span>
                                                    </div>
                                                  </form>
                                                </div>
                                                <div class="col-lg-8">
                                                   <table class="table table-striped table-hover">
                                                      <thead> 
                                                        <tr>
                                                          <th>Detail</th>
                                                          <th>Qte</th>
                                                          <th>Pu</th>
                                                          <th>Tot</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody id="RequestRetailsPrint">

                                                      </tbody>
                                                      <tfoot>
                                                        <tr>
                                                          <th colspan=3>Tot. Gen</th>
                                                          <th><span id="general_total_retails">0</span> FC</th>
                                                        </tr>
                                                      </tfoot>
                                                  </table>
                                                </div>
                                            </div>
                                         

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <hr class="dropdown-divider">
                              <div class="col-lg-12">
                                <!-- Nav tabs -->
                                  <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                      <a class="nav-link active" data-toggle="tab" href="#home">All <span class="badge bg-secondary" id="AllRequestNumber">3</span></a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#menu1">Requisition <span class="badge bg-secondary">0</span></a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#menu2">Self <span class="badge bg-secondary">0</span></a>
                                    </li>
                                  </ul>
                                  <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div class="tab-pane container active" id="home">
                                      <br>
                                      <h6><span class="badge bg-secondary">Toutes les requisitions...</span></h6>
                                      <table class="table table-striped table-hover">
                                        <thead> 
                                          <tr>
                                            <th>#</th>
                                            <th>Description</th>
                                            <th>Montant</th>
                                            <th>Date</th>
                                            <th colspan=5>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>0001</td>
                                              <td>Requisition Test</td>
                                              <td>25 000 FC</td>
                                              <td>26/10/2020</td>
                                              <td class="cursorPointer" typeRequest="All" RequisitionId="0001" onclick="Requisition.PermissionDelete(this)">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                  <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer" onclick="Requisition.TchatBoxRequest(this)">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-square-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                  <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                </svg>
                                              </td>
                                            </tr>
                                            <tr>
                                            <tr>
                                              <td>0002</td>
                                              <td>Requisition 2</td>
                                              <td>25 000 FC</td>
                                              <td>27/10/2020</td>
                                              <td class="cursorPointer" RequisitionId="0002" onclick="Requisition.PermissionDelete(this)">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                  <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-square-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                  <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                </svg>
                                              </td>
                                            </tr>
                                            <tr>
                                            <tr>
                                              <td>0003</td>
                                              <td>Requisition 3</td>
                                              <td>100 000 FC</td>
                                              <td>28/10/2020</td>
                                              <td class="cursorPointer" RequisitionId="0003" onclick="Requisition.PermissionDelete(this)">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                  <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                              </td>
                                              <td class="cursorPointer">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-square-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                  <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                </svg>
                                              </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                          <tr>
                                            <th colspan=2>Tot. Gen</th>
                                            <th colspan=7>150 000 FC</th>
                                          </tr>
                                        </tfoot>
                                      </table>
                                    </div>
                                    <div class="tab-pane container fade" id="menu1">
                                      <br>
                                      <h6><span class="badge bg-secondary">A approuver...</span></h6>
                                    </div>
                                    <div class="tab-pane container fade" id="menu2">
                                      <br>
                                      <h6><span class="badge bg-secondary">Vos requisitions...</span></h6></div>
                                  </div>
                              </div>
                        </div>
                  </div>
          
                  <div class="col-lg-3">
                      <div class="card">
                        <h6 class="card-header"> Details Requisition</h6>
                        <div class="card-body">
                          <table class="table table-striped table-hover">
                            <thead> 
                              <tr>
                                <th>Detail</th>
                                <th>Qte</th>
                                <th>Pu</th>
                                <th>Tot</th>
                              </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                              <tr>
                                <th colspan=3>Tot. Gen</th>
                                <th >0</th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>

                      <!-- bigin toast div -->
                    
                      <!-- end toast div  -->

                  </div>
              </div>
    
          </div>
          <div class="col-lg-12 card-footer">
            PARTIE EN BAS
          </div>
    </div>
  </div>
</body>

<script src="../../lib/js/bootstrap.min.js"></script>
<script src="../../lib/js/Jquery-3.5.1.min.js"></script>
<script src="../../lib/js/ctc-requisitions.js"></script>
<script> var Requisition=new CtcRequistion();</script>
<script>
  var option=
  {
    animation : true,
    delay : 2000
  };

  function Toasty(){
    var toastHTMLElement = document.getElementById( "EpicToast" );
    var toastElement = new boostrap.Toast( toastHTMLElement, option );
    toastElement.show( );
  }
  
</script>
</html>

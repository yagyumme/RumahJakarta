<div class="container-fluid" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="card" style="width: 80%; height:20%; margin:0 auto; border-color: gray;">
        
        <div class="card-header bg-dark text-white" style="border-color: transparent">
            <h4>Pencarian</h4>
        </div>

        <div class="card-body" style="border-color: transparent">
            <form action="/posts">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Cari berdasarkan judul iklan" name="search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>  
            </form>

            <button type="button" class="btn btn-outline-dark col-sm-4" data-bs-toggle="modal" data-bs-target="#myModal2" style="min-width: 20px">
                Pencarian Berdasarkan Filter
            </button>
            <button type="button" class="btn btn-outline-dark col-sm-4" data-bs-toggle="modal" data-bs-target="#myModal" style="min-width: 20px">
                Rekomendasi
            </button>
        </div> 


        <div class="card-footer bg-dark" style="border-color: transparent"></div>

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Filter</h5>
                        <button type="submit" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!--AWAL DARI DIV BODY-->

                    <form action="/posts">
                        <div class="modal-body"> 

                            <div class="mb-2 mt-2">
                                <label for="area" class="form-label"><h6>Area Properti</h6></label>
                                <select class="form-select" name="area" id="area">
                                    <option value="Jakarta Barat">Jakarta Barat</option>
                                    <option value="Jakarta Timur">Jakarta Timur</option>
                                    <option value="Jakarta Utara">Jakarta Utara</option>
                                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                                    <option value="Jakarta Selatan">Jakarta Selatan</option>
                                </select>
                            </div>
                            
                            <div class="mb-2">
                                <label for="category" class="form-label"><h6>Kategori Iklan</h6></label>
                                <select class="form-select" name="category" id="category">
                                    <option value="1">Dijual</option>
                                    <option value="2">Disewa</option>
                                </select>
                            </div>
                            
                            
                            <form>
                                <h6>Harga</h6>
                                <div class="row mb-2">
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="hmin" id="hmin" class="form-control" placeholder="min"/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="hmax" id="hmax" class="form-control" placeholder="max"/>
                                    </div>
                                </div>
                                </div>
                            </form>
    
                            
                            <form>
                                <h6>Luas Tanah</h6>
                                <div class="row mb-2">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="number" name="ltmin" id="ltmin" class="form-control" placeholder="min"/>
                                        <span class="input-group-text">m<sup>2</sup></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="number" name="ltmax" id="ltmax" class="form-control" placeholder="max"/>
                                        <span class="input-group-text">m<sup>2</sup></span>
                                    </div>
                                </div>
                                </div>
                            </form>
                            
                            
                            <form>
                                <h6>Luas Bangunan</h6>
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="input-group">
                                            <input type="number" name="lbmin" id="lbmin" class="form-control" placeholder="min"/>
                                            <span class="input-group-text">m<sup>2</sup></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group">
                                            <input type="number" name="lbmax" id="lbmax" class="form-control" placeholder="max"/>
                                            <span class="input-group-text">m<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
    
                            <div class="mb-2">
                                <label for="jkmrtidur" class="form-label"><h6>Kamar Tidur</h6></label>
                                <select class="form-select" name="jkmrtidur" id="jkmrtidur">
                                    <option value="1">> 1 Kamar Tidur</option>
                                    <option value="2">> 2 Kamar Tidur</option>
                                    <option value="3">> 3 Kamar Tidur</option>
                                    <option value="4">> 4 Kamar Tidur</option>
                                    <option value="5">> 5 Kamar Tidur</option>
                                </select>
                            </div>
    
                            <div class="mb-2">
                                <label for="jkmrmandi" class="form-label"><h6>Kamar Mandi</h6></label>
                                <select class="form-select" name="jkmrmandi" id="jkmrmandi">
                                    <option value="1">> 1 Kamar Mandi</option>
                                    <option value="2">> 2 Kamar Mandi</option>
                                    <option value="3">> 3 Kamar Mandi</option>
                                    <option value="4">> 4 Kamar Mandi</option>
                                    <option value="5">> 5 Kamar Mandi</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-dark mt-3" onclick="submitForm()">Search</button>
                        </div>
                        <div class="modal-footer"></div>
                    </form>
                </div>

            </div>
        </div> 

          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Filter</h5>
                        <button type="submit" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!--AWAL DARI DIV BODY-->

                    <form action="/posts">
                        <div class="modal-body"> 

                            <div class="mb-2 mt-2">
                                <label for="area" class="form-label"><h6>Area Properti</h6></label>
                                <select class="form-select" name="area" id="area">
                                    <option value="Jakarta Barat">Jakarta Barat</option>
                                    <option value="Jakarta Timur">Jakarta Timur</option>
                                    <option value="Jakarta Utara">Jakarta Utara</option>
                                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                                    <option value="Jakarta Selatan">Jakarta Selatan</option>
                                </select>
                            </div>
                            
                            <div class="mb-2">
                                <label for="category" class="form-label"><h6>Kategori Iklan</h6></label>
                                <select class="form-select" name="category" id="category">
                                    <option value="1">Dijual</option>
                                    <option value="2">Disewa</option>
                                </select>
                            </div>
                            
                            
                            <form>
                                <h6>Harga</h6>
                                <div class="row mb-2">
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="hmin" id="hmin" class="form-control" placeholder="min"/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="hmax" id="hmax" class="form-control" placeholder="max"/>
                                    </div>
                                </div>
                                </div>
                            </form>
    
                            
                            <form>
                                <h6>Luas Tanah</h6>
                                <div class="row mb-2">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="number" name="ltmin" id="ltmin" class="form-control" placeholder="min"/>
                                        <span class="input-group-text">m<sup>2</sup></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="number" name="ltmax" id="ltmax" class="form-control" placeholder="max"/>
                                        <span class="input-group-text">m<sup>2</sup></span>
                                    </div>
                                </div>
                                </div>
                            </form>
                            
                            
                            <form>
                                <h6>Luas Bangunan</h6>
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="input-group">
                                            <input type="number" name="lbmin" id="lbmin" class="form-control" placeholder="min"/>
                                            <span class="input-group-text">m<sup>2</sup></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group">
                                            <input type="number" name="lbmax" id="lbmax" class="form-control" placeholder="max"/>
                                            <span class="input-group-text">m<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
    
                            <div class="mb-2">
                                <label for="jkmrtidur" class="form-label"><h6>Kamar Tidur</h6></label>
                                <select class="form-select" name="jkmrtidur" id="jkmrtidur">
                                    <option value="1">> 1 Kamar Tidur</option>
                                    <option value="2">> 2 Kamar Tidur</option>
                                    <option value="3">> 3 Kamar Tidur</option>
                                    <option value="4">> 4 Kamar Tidur</option>
                                    <option value="5">> 5 Kamar Tidur</option>
                                </select>
                            </div>
    
                            <div class="mb-2">
                                <label for="jkmrmandi" class="form-label"><h6>Kamar Mandi</h6></label>
                                <select class="form-select" name="jkmrmandi" id="jkmrmandi">
                                    <option value="1">> 1 Kamar Mandi</option>
                                    <option value="2">> 2 Kamar Mandi</option>
                                    <option value="3">> 3 Kamar Mandi</option>
                                    <option value="4">> 4 Kamar Mandi</option>
                                    <option value="5">> 5 Kamar Mandi</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark mt-3">Search</button>
                        </div>
                        <div class="modal-footer"></div>
                    </form>
                </div>

            </div>
        </div> 
    </div>
</div>


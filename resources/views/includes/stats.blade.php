<!--stats-->
<div class="row">    
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body text-left w-100">
                            <h3 class="danger">{{ $applicationCount }}</h3>
                            <span>Total Applications</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-social-dropbox danger font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body text-left w-100">
                            <h3 class="success">{{ $configsCount }}</h3>
                            <span>Different Configurations</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-layers success font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body text-left w-100">
                            <h3 class="primary">{{ $installCount }}</h3>
                            <span>Installs</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-magic-wand primary font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body text-left w-100">
                            <h3 class="warning">{{ $downloadsCount }}</h3>
                            <span>Downloads</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-cloud-download warning font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/stats-->
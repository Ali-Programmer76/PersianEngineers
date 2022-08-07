<div class="header">
    <div class="col-div-6">
        <span class="first-nav"><i class="fas fa-bars"></i></span>
        <span class="second-nav">داشبورد</span>
    </div>
    <div class="col-div-6">
        <div class="admin-profile">
            <p>سلام {{ auth()->user()->name }} خوش آمدید، <span>شما {{ auth()->user()->userRole() }} هستید.</span>
            </p>
        </div>
    </div>
</div>

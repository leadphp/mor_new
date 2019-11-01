@include('layouts.admin_top_header_hr')

    <!-- search-bar starts here -->

    <div class="search-wrap">
        <div class="container-fluid">
            <div class="search-inner d-f a-i-c j-c-s-b">
                <form>
                    <div class="form-group search-container">
                        <input type="search" class="form-control" id="searchuser" name="search" placeholder="חפש על פי שם פקיד, מייל, כתובת" />
                        <span class="input-icon"><i class="fa fa-search"></i></span> </div>
                </form>
                <div class="form-group file-upload-container">
                    <input type="file" name="clerk_file" id="clerk_file">
                    <a href="javascript:void(0);" class="main-button button-large button-green">העלה קובץ אקסל <img src="{{ URL::asset('admin_new/images/icon-excel.png') }}" alt=""/></a>
                </div>
            </div>
        </div>
    </div>

    <!-- search-bar ends here -->

    <!-- main content starts here -->

    <div class="main-content online-clerk">
        <div class="container-fluid">
            <div class="online-clerk-wrap">
                <div class="table-container online-clerk-table" id="appe-table-filter">
                    <table style="white-space: nowrap;" id="clerkTable">
                        <thead>
                            <tr>
                                <th>מספר# <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>סוג הבנק <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>בנק <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>סניף<i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>עיר <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>כתובת <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>שם פקיד <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>טלפון ראשי <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>פקס <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>מייל<i class="fa fa-sort" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody class="cff">
                             @php $cc = 1;

                                @endphp
                                @foreach($clerk_data as $clerk)
                            <tr>
                                <td>@php echo $cc; @endphp</td>
                                <td>@php echo $clerk->bank_type; @endphp</td>
                                <td>@php echo $clerk->bank; @endphp</td>
                                <td>@php echo $clerk->branch; @endphp</td>
                                <td>@php echo $clerk->city; @endphp</td>
                                <td>@php echo $clerk->address; @endphp3</td>
                                <td>@php echo $clerk->clerk_name; @endphp</td>
                                <td>@php echo $clerk->main_phone; @endphp</td>
                                <td>@php echo $clerk->fax; @endphp</td>
                                <td class="remove_capital_letter">@php echo $clerk->mail; @endphp</td>
                            </tr>
                            @php $cc++; @endphp
                            @endforeach
                            </tbody>
                    </table>
                </div>
            <div class="pagination-container">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <!-- <li class="active"><a href="javascript:void(0);">1</a></li>
                            <li><a href="javascript:void(0);">2</a></li>
                            <li><a href="javascript:void(0);">3</a></li>
                            <li><a href="javascript:void(0);">4</a></li>
                            <li><a href="javascript:void(0);">5</a></li>
                            <li>.....</li>
                            <li><a href="javascript:void(0);">38</a></li>
                            <li>/</li>
                            <li>(1234 פקידים)</li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- main content ends here -->

    <!-- filter-by-bank starts here -->

    <div class="filter-by-bank">
        <div class="container-fluid">
            <form>
                <div class="form-group">
                    <label>סנן לפי בנק</label>
                    <select name="clerkFilter" class="selectpicker">
          <option>הצג הכול</option>
          @foreach($clerk_data_filter as $clerk1)
           <option value="@php echo $clerk1->bank_type; @endphp">@php echo $clerk1->bank; @endphp</option>
            @endforeach
        </select>
                </div>
            </form>
        </div>
    </div>

    <!-- filter-by-bank ends here -->
    @include('layouts.footer_admin_hr')
    <script type="text/javascript">
        $('#loader-global').show();
        $(document).ready(function() {
            $('#loader-global').hide();
           
            $('#clerkTable').DataTable({
                        language: {
                                    paginate: {
                                        next: '>>',
                                        previous: '<<'
                                    }
                                },
                                "bPaginate": true,
                                //pagingType: "numbers",
                                // searching: false,
                                bInfo: false,
                                "dom": 't<"pagination"p>',
                            });
                    
                        var oTable = $('#clerkTable').DataTable(); 
                        $('#searchuser').on( 'keyup', function () {
                            oTable.search( this.value, true, false ).draw();
                        });

            $('select[name="clerkFilter"]').on('change', function() {
            var bankval = $(this).val();
         
            if(bankval == "הצג הכול"){
                window.location.href = '{{url("admin/clerks-hr")}}';
                
            }
            // else{
            //     window.location.href = '{{url("admin/clerks")}}?bank_name='+bankval;
            // }
            url = '<?= url("/admin/clerk_filter-hr") ?>/'+bankval;
            if(bankval) {

                $.ajax({
                    url: url,
                    type: "GET",
                    // data: {'id':bankval},
                    dataTYPE: 'json',
                  
                    success:function(response) {
                        tt = response.data;
                        // console.log(tt); 
                        //$('.cff').html();
                        
                       
                        $("#clerkTable").remove();
                        $('#clerkTable_paginate').remove();

                        $("#appe-table-filter").append('<table style="white-space: nowrap;" id="clerkTable"><thead><tr><th>Number# <i class="fa fa-sort" aria-hidden="true"></i></th><th>Bank Type <i class="fa fa-sort" aria-hidden="true"></i></th><th>Bank <i class="fa fa-sort" aria-hidden="true"></i></th><th>Branch <i class="fa fa-sort" aria-hidden="true"></i></th><th>City <i class="fa fa-sort" aria-hidden="true"></i></th><th>Address <i class="fa fa-sort" aria-hidden="true"></i></th><th>Clerk Name <i class="fa fa-sort" aria-hidden="true"></i></th><th>Main Phone <i class="fa fa-sort" aria-hidden="true"></i></th><th>Fax <i class="fa fa-sort" aria-hidden="true"></i></th><th>Mail <i class="fa fa-sort" aria-hidden="true"></i></th></tr></thead><tbody class="cff" >');

                        $.each(tt, function() {
                            $('.cff').append('<tr><td>'+this.id+'</td><td>'+this.bank_type+'</td><td>'+this.bank+'</td><td>'+this.branch+'</td><td>'+this.city+'</td><td>'+this.address+'</td><td>'+this.clerk_name+'</td><td>'+this.main_phone+'</td><td>'+this.fax+'</td><td>'+this.mail+'</td></tr>');
                            $('#clerkTable_length').hide();
                            $('#clerkTable_filter').hide();
                        });

                        $("#appe-table-filter").append('</tbody></table>');

                        $('#clerkTable').DataTable({
                        language: {
                                    paginate: {
                                        next: '>>',
                                        previous: '<<'
                                    }
                                },
                                "bPaginate": true,
                                //pagingType: "numbers",
                                // searching: false,
                                bInfo: false,
                                "dom": 't<"pagination"p>',
                            });
                    
                        var oTable = $('#clerkTable').DataTable(); 
                        $('#searchuser').on( 'keyup', function () {
                            oTable.search( this.value, true, false ).draw();
                        } );
                                 
                    }
                });
            }
        });
    });
</script>
<!-- search-bar starts here -->
@include('layouts.admin_top_header')
    <div class="search-wrap">
        <div class="container-fluid">
            <div class="search-inner d-f a-i-c j-c-s-b">
                <form>
                    <div class="form-group search-container">
                        <input type="search" class="form-control" id="searchuser" name="search" placeholder="Search By Brand, City, Address, Clerk Name, Mail" />
                        <span class="input-icon"><i class="fa fa-search"></i></span> </div>
                </form>
                <div class="form-group file-upload-container">
                    <input type="file" name="clerk_file" id="clerk_file">
                    <a href="javascript:void(0);" class="main-button button-large button-green">Upload Excel File <img src="images/icon-excel.png" alt=""/></a>
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
                                <th>Number# <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Bank Type <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Bank <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Branch <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>City <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Address <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Clerk Name <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Main Phone <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Fax <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Mail <i class="fa fa-sort" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody class="cff" >
                           
                                @php $cc = 1; @endphp
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
                                    <td>@php echo $clerk->mail; @endphp</td>
                                </tr>
                                @php $cc++; @endphp
                                @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="apdata">
                    

                </div>
                <div class="pagination-container">
                    <nav aria-label="Page navigation">
                        {{ $clerk_data->links() }}
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
                    <label>Filter by bank</label>
                    <select name="clerkFilter" class="selectpicker">
          <option>Show All</option>
            @foreach($clerk_data_filter as $clerk1)
                <option value="@php echo $clerk1->bank_type; @endphp">@php echo $clerk1->bank; @endphp</option>
            @endforeach
        </select>
                </div>
            </form>
        </div>
    </div>
@include('layouts.footer_admin')
<!-- filter-by-bank ends here -->
<script type="text/javascript">
    
$(document).ready( function () {
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
        //"dom": 't<"pagination"p>',
    });
    
    var oTable = $('#clerkTable').DataTable(); 
    $('#searchuser').on( 'keyup', function () {
        oTable.search( this.value, true, false ).draw();
    } );
    

    $('#customerTable_filter').hide();


    $('.main-button').on('click', function(e){
        e.preventDefault();
        var startDate = $('#from-register-time').val(),
            endDate = $('#to-register-time').val();


        filterByDate(8, startDate, endDate); // We call our filter function

        oTable.draw(); // Manually redraw the table after filtering
    });
      
      // Clear the filter. Unlike normal filters in Datatables,
      // custom filters need to be removed from the afnFiltering array.
      // $('#clearFilter').on('click', function(e){
      //   e.preventDefault();
      //   $.fn.dataTableExt.afnFiltering.length = 0;
      //   $tableSel.dataTable().fnDraw();
      // });
      
  

    /* Our main filter function
     * We pass the column location, the start date, and the end date
     */
    var filterByDate = function(column, startDate, endDate) {
      // Custom filter syntax requires pushing the new filter to the global filter array
            $.fn.dataTableExt.afnFiltering.push(
                function( oSettings, aData, iDataIndex ) {
       
                    var nk=aData[column];
                      //console.log(nk);

                    var rowDate = normalizeDate(aData[column]),
                  start = normalizeDate(startDate),
                  end = normalizeDate(endDate);
                             
              
              // If our date from the row is between the start and end
              if (start <= rowDate && rowDate <= end) {
                return true;
              } else if (rowDate >= start && end === '' && start !== ''){
                return true;
              } else if (rowDate <= end && start === '' && end !== ''){
                return true;
              } else {
                return false;
              }
            }
            );
        };

    // converts date strings to a Date object, then normalized into a YYYYMMMDD format (ex: 20131220). Makes comparing dates easier. ex: 20131220 > 20121220
    var normalizeDate = function(dateString) {
      var date = new Date(dateString);
      console.log(date);
      var normalized = date.getFullYear() + '' + (("0" + (date.getMonth() + 1)).slice(-2)) + '' + ("0" + date.getDate()).slice(-2);
      return normalized;
    }

} );

 
</script>  


<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="clerkFilter"]').on('change', function() {
            var bankval = $(this).val();
            if(bankval == "Show All"){
                window.location.href = '{{url("admin/clerks")}}';
            }
            // else{
            //     window.location.href = '{{url("admin/clerks")}}?bank_name='+bankval;
            // }
            url = '<?= url("/admin/clerk_filter") ?>/'+bankval;
            if(bankval) {
                $.ajax({
                    url: url,
                    type: "GET",
                    // data: {'id':bankval},
                    dataTYPE: 'json',
                  
                    success:function(response) {
                        tt = response.data; 
                        //$('.cff').html();
                        $("#clerkTable").remove();

                        $("#appe-table-filter").append('<table style="white-space: nowrap;" id="clerkTable"><thead><tr><th>Number# <i class="fa fa-sort" aria-hidden="true"></i></th><th>Bank Type <i class="fa fa-sort" aria-hidden="true"></i></th><th>Bank <i class="fa fa-sort" aria-hidden="true"></i></th><th>Branch <i class="fa fa-sort" aria-hidden="true"></i></th><th>City <i class="fa fa-sort" aria-hidden="true"></i></th><th>Address <i class="fa fa-sort" aria-hidden="true"></i></th><th>Clerk Name <i class="fa fa-sort" aria-hidden="true"></i></th><th>Main Phone <i class="fa fa-sort" aria-hidden="true"></i></th><th>Fax <i class="fa fa-sort" aria-hidden="true"></i></th><th>Mail <i class="fa fa-sort" aria-hidden="true"></i></th></tr></thead><tbody class="cff" >');

                        $.each(tt, function() {
                            $('.cff').append('<tr><td>'+this.id+'</td><td>'+this.bank_type+'</td><td>'+this.bank+'</td><td>'+this.branch+'</td><td>'+this.city+'</td><td>'+this.address+'</td><td>'+this.clerk_name+'</td><td>'+this.main_phone+'</td><td>'+this.fax+'</td><td>'+this.mail+'</td></tr>');
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
                                //"dom": 't<"pagination"p>',
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
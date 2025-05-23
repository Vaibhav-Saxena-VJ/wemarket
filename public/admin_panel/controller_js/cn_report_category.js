var base_url = $('#base_url').val();
$(function () {
    var table = $('#arm_data_table').DataTable({
        processing: true,
        serverSide: true,
        
        ajax: base_url + "/admin/category-data-table",
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },
        {
            data: 'category_name',
            name: 'category_name'
        },
        {
            data: 'image',
            name: 'image'
        },
        {
            data: 'status',
            name: 'status',
            orderable: false,
            searchable: false
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        },
        ]
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
})


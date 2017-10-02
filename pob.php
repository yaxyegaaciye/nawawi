<table border="1px">
<tbody>
    <tr>
        <td>Dinuka Perera</td>
        <td>User is active</td>
        <td><a href="javascript:void(0)" class="inactive">Activate</a></td>
    </tr>
    <tr>
        <td>Thilanga Perera</td>
        <td>User is inactive</td>
        <td><a href="javascript:void(0)" class="active">Dectivate</a></td>
    </tr>
    <tr>
        <td>Test Perera</td>
        <td>User is active</td>
        <td><a href="javascript:void(0)" class="inactive">Activate</a></td>
    </tr>
</tbody>
</table>
<script>
$(document).on('click','.active', function () {
    $(this).html('Activate');
    $(this).removeClass('active');
    $(this).addClass('inactive');
});

$(document).on('click','.inactive', function () {
    $(this).html('Deactivate');
    $(this).removeClass('inactive');
    $(this).addClass('active');
});
</script>
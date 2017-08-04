$(document).ready(function(){
    var url = 'http://localhost:8000/findhangxe';
    var urls = 'http://localhost:8000/findloaixe';
    $('#hangxe').change(function () { 
        var id_hangxe = $('#hangxe').val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: url,
            method: 'GET',
            data: {
                id_hangxe: id_hangxe,
                _token: token,
            },
            
            success: function (data) {
                $('#xe').html('');
                $.each(data, function (key, value) {
                    $('#xe').append(
                        "<tr>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.id_hangxes + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.id_loaixes + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.name + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><img src='/images/upload/" + value.image + "' class='img-responsive'></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.alias + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.nguongoc + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.gia_niem_yet + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.gia_dam_phan + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.dongco + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.congsuat + "</span></a></td>"+
                        "</tr>"
                    );
                });
                console.log(data);
            }
        });
    });
    $('#loaixe').change(function () { 
        var id_loaixe = $('#loaixe').val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: urls,
            method: 'GET',
            data: {
                id_loaixe: id_loaixe,
                _token: token,
            },
            
            success: function (data) {
                $('#xe').html('');
                $.each(data, function (key, value) {
                    $('#xe').append(
                        "<tr>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.id_hangxes + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.id_loaixes + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.name + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><img src='/images/upload/" + value.image + "' class='img-responsive'></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.alias + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.nguongoc + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.gia_niem_yet + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.gia_dam_phan + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.dongco + "</span></a></td>"+
                            "<td><a href='/detail/"+value.name+"'><span>" + value.congsuat + "</span></a></td>"+
                        "</tr>"
                    );
                });
                console.log(data);
            }
        });
    });
});
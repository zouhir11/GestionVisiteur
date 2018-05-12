

<html>
<head></head>
<body>
                                <table>
                                    <tr>
                                        <td>Service</td><td>Motif</td><td>Dtae Visite</td>
                                    </tr>

                                    @foreach($visite as $vis)
                                        <tr><td>{{$vis->nom_service}}</td><td>{{$vis->nom_motif}}</td><td>{{$vis->date_visite}}</td></tr>
                                    @endforeach

                                </table>

</body>
</html>




<!DOCTYPE html>
<html>  
    <head>  
        <title>Insert Form</title>
    </head>
    <body>
    <center>    
            <form action="/insert" method="POST">
                <table> 
                    <tr>    
                        {{csrf_field()}}
                        <td>Name:    </td>
                        <td><input type="text" name="name">    </td>
                    </tr>
                    <tr>    
                        <td>Email:    </td>
                        <td><input type="text" name="email">    </td>
                    </tr>
                    <tr>    
                        <td>Password:    </td>
                        <td><input type="text" name="password">    </td>
                    </tr>
                    <tr>    
                        <td>Gender:    </td>
                        <td><input type="text" name="gender">    </td>
                    </tr>
                    <tr>    
                        <td><input type="submit" name="submit" value="Add"></td>
                    </tr>
    
                </table>
            </form>
    </center>

    @if($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>   
            @endforeach
        </ul>
    </div>
    @endif
    </body>
</html>
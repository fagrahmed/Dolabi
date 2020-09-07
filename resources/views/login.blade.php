<!DOCTYPE html>
<html>  
    <head>  
        <title>Login Here</title>
    </head>
    <body>
    <center>  
            <form action="/login" method="POST">
                @csrf
                <table> 
                    <tr>    
                        <td>Email:    </td>
                        <td><input type="text" name="email">    </td>
                    </tr>
                    <tr>    
                        <td>Password:    </td>
                        <td><input type="text" name="password">    </td>
                    </tr>
                    <tr>    
                        <td><button type="submit">Sign Up</td>
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create | Working_Reports</title>
    </head>
    <body>
        <h1>作業報告登録</h1>
        @if ($errors->any()) 
            @foreach($errors->all() as $error)
            <p style="color:red;">{{ $error }}</p>
            @endforeach
        @endif

        <form action="/ManagementSystem/public/working_reports/store" method="post">
            @csrf
            <table>
                <tr>
                    <th>従業員ID</th>
                    <td><input type="number" name="employee_id"></td>
                </tr>
                <tr>
                    <th>作業日付</th>
                    <td><input type="date" name="working_date"></td>
                </tr>
                <tr>
                    <th>作業時間</th>
                    <td><input type="number" name="working_hours"></td>
                </tr>
                <tr>
                    <th>概要</th>
                    <td><textarea name="summary"></textarea></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="登録"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Employees</title>
    </head>
    <body>
        <h1>Employees</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>氏名</th>
                <th>部署</th>
                <th>基本給</th>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->employee_name }}</td>
                    <td>{{ $employee->section }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td><a href="/ManagementSystem/public/employees/detail?employee_id={{ $employee->id }}">詳細</a></td>
                </tr>
            @endforeach
        </table>
        <p><a href="/ManagementSystem/public/working_reports">作業報告一覧</a></p>
    </body>
</html>

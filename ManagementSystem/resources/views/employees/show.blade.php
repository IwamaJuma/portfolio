<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>従業員詳細</title>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>氏名</th>
                <th>部署</th>
                <th>基本給</th>
            </tr>
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->employee_name }}</td>
                <td>{{ $employee->section }}</td>
                <td>{{ $employee->salary }}</td>
            </tr>
        </table>
        <table>
            <tr>
                <th>作業日付</th>
                <th>作業時間</th>
                <th>概要</th>
            </tr>
            @foreach ($workingReports as $workingReport)
                <tr>
                    <td>{{ $workingReport->working_date }}</td>
                    <td>{{ $workingReport->working_hours }}</td>
                    <td>{{ $workingReport->summary }}</td>
                </tr>
            @endforeach
        </table>
        <p><a href="/ManagementSystem/public/employees">従業員一覧</a></p>
    </body>
</html>

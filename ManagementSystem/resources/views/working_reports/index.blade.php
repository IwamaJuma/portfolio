<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>作業報告一覧</title>
    </head>
    <body>
        <h1>作業報告</h1>
        <p><a href="/ManagementSystem/public/working_reports/create">登録</a></p>
        <table>
            <tr>
                <th>ID</th>
                <th>従業員ID</th>
                <th>作業日付</th>
                <th>作業時間</th>
                <th>概要</th>
            </tr>
            @foreach ($workingReports as $workingReport)
                <tr>
                    <td>{{ $workingReport->id }}</td>
                    <td>{{ $workingReport->employee_id }}</td>
                    <td>{{ $workingReport->working_date }}</td>
                    <td>{{ $workingReport->working_hours }}</td>
                    <td>{{ $workingReport->summary }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>

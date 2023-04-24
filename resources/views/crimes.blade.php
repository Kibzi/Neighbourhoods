<!DOCTYPE html>
<table>
    <thead>
        <tr>
            <th>Category</th>
            <th>Outcome Category</th>
        </tr>
    </thead>
    <tbody>
        @foreach($crimes as $crime)
            <tr>
                <td>{{ $crime['category'] }}</td>
                <td>{{ $crime['outcome_status']['category'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
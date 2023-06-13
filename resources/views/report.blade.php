<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>كشف حساب</title>
    <style>
        /* تعريف أسلوب الطباعة */
        @media print {
            /* تعريف خصائص الصفحة */
            @page {

                counter-increment: page;
                footer: page-footer;
            }
        }
            /* تعريف أسلوب الجدول */
            table, th, td {
  border: 1px solid;
}

table {
  width: 100%;
}

            /* تعريف الرأس */
            #page-header {
                margin-bottom: 20px;
            }

            /* تعريف الفوتر */
            #page-footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- الرأس -->
    <div id="page-header">
        <h1>كشف حساب</h1>
        <p>من تاريخ: {{ $startDate }}</p>
        <p>الي تاريخ: {{ $endDate }}</p>
    </div>

    <!-- الجدول -->
    @if(isset($records))
        <table>
            <thead>
                <tr>
                    <th>المرسل</th>
                    <th>المستلم</th>
                    <th>القيمة</th>
                    <th>تاريخ العملية</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                    <tr>
                        <td>{{ $record->sender }}</td>
                        <td>{{ $record->reciple }}</td>
                        <td>{{ $record->value }}</td>
                        <td>{{ $record->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
<br>
    <!-- الفوتر -->


    <!-- النص المخفي -->
    <div style="display: none;">
        <p>Printed on: {{ date('Y-m-d H:i:s') }}</p>
    </div>

    <!-- الزر للطباعة -->
    <button onclick="window.print()">طباعة</button>
</body>
</html>

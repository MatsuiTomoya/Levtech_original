import { Calendar } from "@fullcalendar/core";
import interactionPlugin from "@fullcalendar/interaction";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";

var calendarEl = document.getElementById("calendar");

let calendar = new Calendar(calendarEl, {
    plugins:[interactionPlugin, dayGridPlugin, timeGridPlugin, listPlugin],
    initialView: "dayGridWeek",
    headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "timeGridWeek,listWeek",
    },
    locale: "ja",
    
    // 日付をクリック、または範囲を選択したイベント
    selectable: true,
    select: function (info) {
        //alert("selected " + info.startStr + " to " + info.endStr);
        //window.location.href = '/create';
        
          //入力ダイアログ
        const eventName = prompt("イベントを入力してください");
        const body =prompt("備考を入力してください");
        if (eventName) {
             // Laravelの登録処理の呼び出し
            //window.location.href = '/create';
            window.axios
                .post("/schedule-add", {
                    start_date: info.start.valueOf(),
                    end_date: info.end.valueOf(),
                    event_name: eventName,
                    body: body,
                    //カラムを追加する　ダイアログ複数入力
                })
                .then(() => {
                    // イベントの追加
                    calendar.addEvent({
                        title: eventName,
                        body: body,
                        start: info.start,
                        end: info.end,
                    });
                })
                .catch(() => {
                    // バリデーションエラーなど
                    alert("登録に失敗しました");
                });
        
        }
    },
    
    events: function (info, successCallback, failureCallback) {
        // Laravelのイベント取得処理の呼び出し
        window.axios
            .post("/schedule-get", {
                start_date: info.start.valueOf(),
                end_date: info.end.valueOf(),
            })
            .then((response) => {
                // 追加したイベントを削除
                calendar.removeAllEvents();
                // カレンダーに読み込み
                successCallback(response.data);
                console.log(response.data);
            })
            .catch(() => {
                // バリデーションエラーなど
                alert("登録に失敗しました");
            });
    },
    
    eventClick: function(arg) {
            if (confirm('削除しますか？')) {
                console.log(arg.event.id);
                arg.event.remove()
                window.axios
                    .post(`/schedule-delete/`+arg.event.id);
                
            }
        },
});
calendar.render();
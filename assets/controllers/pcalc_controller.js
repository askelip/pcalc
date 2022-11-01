import { Controller } from '@hotwired/stimulus';

const minutesInDay = 24*60
const sleepingTimeMinutes = 7*60
const wakingTimeMinutes = minutesInDay - sleepingTimeMinutes
const bufferTimeMinutes = 60

export default class extends Controller {
    static targets = [ "tasks", "table", "message" ]

    fill() {
        const selectElement = this.tasksTarget
        const values = Array.from(selectElement.querySelectorAll("option:checked"),e=>e.dataset);

        // fill table with tasks + calc the max duration
        const table = this.tableTarget
        let maxDuration = 0

        // clear tbody rows
        table.innerHTML = ''

        // for loop to build elements + calc max
        for (let i = 0; i < values.length; i++) {
            // push tr elements to the table after header row
            // check row already exists?
            let row = table.insertRow()
            row.insertCell().innerHTML = values[i].taskRoutineNameValue
            row.insertCell().innerHTML = values[i].taskNameValue
            row.insertCell().innerHTML = values[i].taskDurationValue

            // sort by routine and also give class name for coloring
            maxDuration = maxDuration + Number(values[i].taskDurationValue)
        }

        const messageArea = this.messageTarget
        if ((maxDuration + bufferTimeMinutes) >= wakingTimeMinutes) {
            console.log("You've maxed your daily time!")
            messageArea.innerHTML = "<p>You've maxed out your daily time!</p>"
        }
    }
}

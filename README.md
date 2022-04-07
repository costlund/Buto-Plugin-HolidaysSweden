# Buto-Plugin-HolidaysSweden
Calculate swedish holidays for a given year.

## Widget
Use this widget for test purposes.

```
type: widget
data:
  plugin: holidays/sweden
  method: demo
  data:
    year: 2022
```

## Output
From widget above or method calcHolidays(array('year' => 2022)).

```
year: 2022
success: true
helgdagar:
  -
    name: Nyårsdagen
    day: 01-01
    free: true
    calc:
      date: '2022-01-01'
      N: '6'
      free: false
  -
    name: Trettondagsafton
    day: 01-05
    free: false
    calc:
      date: '2022-01-05'
      N: '3'
      free: false
  -
    name: 'Trettondedag jul'
    day: 01-06
    free: true
    calc:
      date: '2022-01-06'
      N: '4'
      free: true
  -
    name: Skärtorsdag
    free: false
    other:
      name: Påskdagen
      add: -3
    calc:
      date: '2022-04-14'
      N: '4'
      free: false
  -
    name: Långfredagen
    free: true
    other:
      name: Påskdagen
      add: -2
    calc:
      date: '2022-04-15'
      N: '5'
      free: true
  -
    name: Påskafton
    free: true
    other:
      name: Påskdagen
      add: -1
    calc:
      date: '2022-04-16'
      N: '6'
      free: false
  -
    name: Påskdagen
    description: 'Påskdagen infaller den första söndagen efter första metonska fullmånen som infaller på eller närmast efter vårdagjämningen.'
    free: true
    calc:
      date: '2022-04-17'
      N: '7'
      free: false
  -
    name: 'Annandag påsk'
    free: true
    other:
      name: Påskdagen
      add: 1
    calc:
      date: '2022-04-18'
      N: '1'
      free: true
  -
    name: Valborgsmässoafton
    free: false
    day: 04-30
    calc:
      date: '2022-04-30'
      N: '6'
      free: false
  -
    name: 'Första maj'
    free: true
    day: 05-01
    calc:
      date: '2022-05-01'
      N: '7'
      free: false
  -
    name: 'Kristi himmelfärdsdag'
    free: true
    other:
      name: Påskdagen
      add: 39
    calc:
      date: '2022-05-26'
      N: '4'
      free: true
  -
    name: Pingstafton
    free: false
    other:
      name: Påskdagen
      add: 48
    calc:
      date: '2022-06-04'
      N: '6'
      free: false
  -
    name: Pingstdagen
    free: true
    other:
      name: Påskdagen
      add: 49
    calc:
      date: '2022-06-05'
      N: '7'
      free: false
  -
    name: 'Sveriges nationaldag'
    free: true
    day: 06-06
    calc:
      date: '2022-06-06'
      N: '1'
      free: true
  -
    name: Midsommarafton
    free: true
    first_day:
      weekday: 5
      from: 06-19
      to: 06-25
    calc:
      date: '2022-06-24'
      N: '5'
      free: true
  -
    name: Midsommardagen
    free: true
    first_day:
      weekday: 6
      from: 06-20
      to: 06-26
    calc:
      date: '2022-06-25'
      N: '6'
      free: false
  -
    name: 'Alla helgons afton'
    free: false
    first_day:
      weekday: 5
      from: 10-30
      to: 11-05
    calc:
      date: '2022-11-04'
      N: '5'
      free: false
  -
    name: 'Alla helgons dag'
    free: true
    first_day:
      weekday: 6
      from: 10-31
      to: 11-06
    calc:
      date: '2022-11-05'
      N: '6'
      free: false
  -
    name: Julafton
    free: true
    day: 12-24
    calc:
      date: '2022-12-24'
      N: '6'
      free: false
  -
    name: Juldagen
    free: true
    day: 12-25
    calc:
      date: '2022-12-25'
      N: '7'
      free: false
  -
    name: 'Annandag jul'
    free: true
    day: 12-26
    calc:
      date: '2022-12-26'
      N: '1'
      free: true
  -
    name: Nyårsafton
    free: true
    day: 12-31
    calc:
      date: '2022-12-31'
      N: '6'
      free: false
anchor:
  vårdagjämningen: 03-20
  fullmoon:
    - '2022-04-16'
    - '2023-04-06'
    - '2024-03-25'
    - '2025-04-13'
    - '2026-04-02'
    - '2027-03-22'
    - '2028-04-09'
    - '2029-03-30'
    - '2030-04-18'
```

## Helgdagar
- name (Name of holiday)
- free (No work day)
- day (If set this is the day)
- first_day (If set first day in given week day between from and to)
- other (Depending on easter day and param add)
- calc/date (The date in given year)
- calc/N (Week day 1-7)
- calc/free (true if free=true and week day 1-5)

```
name: Nyårsafton
free: true
day: 12-31
calc:
  date: '2022-12-31'
  N: '6'
  free: false
```

## Full moon
Full moon days has to be updated over time. Get dates from below.
```
https://phasesmoon.com
https://phasesmoon.com/fullmooncalendar2031.html
```

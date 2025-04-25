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
year: '2022'
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
    name: 'Annandag pingst'
    free: false
    other:
      name: Påskdagen
      add: 50
    calc:
      date: '2022-06-06'
      N: '1'
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
  vardagjamning:
    - '2010-03-20 17:32:13'
    - '2011-03-20 23:21:44'
    - '2012-03-20 05:14:25'
    - '2013-03-20 11:02:55'
    - '2014-03-20 16:57:05'
    - '2015-03-20 22:45:09'
    - '2016-03-20 04:30:11'
    - '2017-03-20 10:28:38'
    - '2018-03-20 16:15:27'
    - '2019-03-20 21:58:25'
    - '2020-03-20 03:50:36'
    - '2021-03-20 09:37:27'
    - '2022-03-20 15:33:23'
    - '2023-03-20 21:24:24'
    - '2024-03-20 03:06:21'
    - '2025-03-20 09:01:25'
    - '2026-03-20 14:45:53'
    - '2027-03-20 20:24:36'
    - '2028-03-20 02:17:02'
    - '2029-03-20 08:01:52'
    - '2030-03-20 13:51:58'
    - '2031-03-20 19:40:51'
    - '2032-03-20 01:21:45'
    - '2033-03-20 07:22:35'
    - '2034-03-20 13:17:20'
    - '2035-03-20 19:02:34'
    - '2036-03-20 01:02:40'
    - '2037-03-20 06:50:05'
    - '2038-03-20 12:40:27'
    - '2039-03-20 18:31:50'
    - '2040-03-20 00:11:29'
    - '2041-03-20 06:06:36'
    - '2042-03-20 11:53:06'
    - '2043-03-20 17:27:34'
    - '2044-03-19 23:20:20'
    - '2045-03-20 05:07:24'
    - '2046-03-20 10:57:38'
    - '2047-03-20 16:52:26'
    - '2048-03-19 22:33:37'
    - '2049-03-20 04:28:24'
    - '2050-03-20 10:19:22'
  sommarsolstand:
    - '2010-06-21 11:28:25'
    - '2011-06-21 17:16:30'
    - '2012-06-20 23:09:49'
    - '2013-06-21 05:04:57'
    - '2014-06-21 10:51:14'
    - '2015-06-21 16:38:55'
    - '2016-06-20 22:34:11'
    - '2017-06-21 04:24:09'
    - '2018-06-21 10:07:18'
    - '2019-06-21 15:54:14'
    - '2020-06-20 21:44:40'
    - '2021-06-21 03:32:08'
    - '2022-06-21 09:13:49'
    - '2023-06-21 14:57:47'
    - '2024-06-20 20:50:56'
    - '2025-06-21 02:42:11'
    - '2026-06-21 08:24:26'
    - '2027-06-21 14:10:45'
    - '2028-06-20 20:01:54'
    - '2029-06-21 01:48:11'
    - '2030-06-21 07:31:11'
    - '2031-06-21 13:17:00'
    - '2032-06-20 19:08:38'
    - '2033-06-21 01:00:59'
    - '2034-06-21 06:44:02'
    - '2035-06-21 12:32:58'
    - '2036-06-20 18:32:03'
    - '2037-06-21 00:22:16'
    - '2038-06-21 06:09:12'
    - '2039-06-21 11:57:14'
    - '2040-06-20 17:46:11'
    - '2041-06-20 23:35:39'
    - '2042-06-21 05:15:38'
    - '2043-06-21 10:58:09'
    - '2044-06-20 16:50:55'
    - '2045-06-20 22:33:41'
    - '2046-06-21 04:14:26'
    - '2047-06-21 10:03:16'
    - '2048-06-20 15:53:43'
    - '2049-06-20 21:47:06'
    - '2050-06-21 03:32:48'
  hastdagjamning:
    - '2010-09-23 03:09:02'
    - '2011-09-23 09:04:38'
    - '2012-09-22 14:49:59'
    - '2013-09-22 20:44:08'
    - '2014-09-23 02:29:05'
    - '2015-09-23 08:20:33'
    - '2016-09-22 14:21:07'
    - '2017-09-22 20:02:48'
    - '2018-09-23 01:54:05'
    - '2019-09-23 07:50:10'
    - '2020-09-22 13:31:38'
    - '2021-09-22 19:21:03'
    - '2022-09-23 01:03:40'
    - '2023-09-23 06:49:56'
    - '2024-09-22 12:43:36'
    - '2025-09-22 18:19:16'
    - '2026-09-23 00:05:08'
    - '2027-09-23 06:01:38'
    - '2028-09-22 11:45:12'
    - '2029-09-22 17:38:23'
    - '2030-09-22 23:26:46'
    - '2031-09-23 05:15:10'
    - '2032-09-22 11:10:44'
    - '2033-09-22 16:51:31'
    - '2034-09-22 22:39:25'
    - '2035-09-23 04:38:46'
    - '2036-09-22 10:23:09'
    - '2037-09-22 16:12:54'
    - '2038-09-22 22:02:05'
    - '2039-09-23 03:49:25'
    - '2040-09-22 09:44:43'
    - '2041-09-22 15:26:21'
    - '2042-09-22 21:11:20'
    - '2043-09-23 03:06:43'
    - '2044-09-22 08:47:39'
    - '2045-09-22 14:32:42'
    - '2046-09-22 20:21:31'
    - '2047-09-23 02:07:52'
    - '2048-09-22 08:00:26'
    - '2049-09-22 13:42:24'
    - '2050-09-22 19:28:18'
  vintersolstand:
    - '2010-12-21 23:38:28'
    - '2011-12-22 05:30:03'
    - '2012-12-21 11:12:37'
    - '2013-12-21 17:11:00'
    - '2014-12-21 23:03:01'
    - '2015-12-22 04:48:57'
    - '2016-12-21 10:44:10'
    - '2017-12-21 16:28:57'
    - '2018-12-21 22:23:44'
    - '2019-12-22 04:19:25'
    - '2020-12-21 10:02:19'
    - '2021-12-21 15:59:16'
    - '2022-12-21 21:48:10'
    - '2023-12-22 03:27:19'
    - '2024-12-21 09:20:30'
    - '2025-12-21 15:03:01'
    - '2026-12-21 20:50:09'
    - '2027-12-22 02:42:04'
    - '2028-12-21 08:19:33'
    - '2029-12-21 14:13:59'
    - '2030-12-21 20:09:30'
    - '2031-12-22 01:55:25'
    - '2032-12-21 07:55:48'
    - '2033-12-21 13:45:51'
    - '2034-12-21 19:33:50'
    - '2035-12-22 01:30:42'
    - '2036-12-21 07:12:42'
    - '2037-12-21 13:07:33'
    - '2038-12-21 19:02:08'
    - '2039-12-22 00:40:23'
    - '2040-12-21 06:32:38'
    - '2041-12-21 12:18:07'
    - '2042-12-21 18:03:51'
    - '2043-12-22 00:01:01'
    - '2044-12-21 05:43:22'
    - '2045-12-21 11:34:54'
    - '2046-12-21 17:28:16'
    - '2047-12-21 23:07:01'
    - '2048-12-21 05:02:03'
    - '2049-12-21 10:51:57'
    - '2050-12-21 16:38:29'
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
    - '2031-04-07'
    - '2032-03-27'
    - '2033-04-14'
    - '2034-04-03'
    - '2035-03-23'
    - '2036-04-10'
    - '2037-03-31'
    - '2038-03-21'
    - '2039-04-09'
    - '2040-03-28'
    - '2041-04-16'
    - '2042-04-05'
    - '2043-03-25'
    - '2044-04-12'
    - '2045-04-01'
    - '2046-03-22'
    - '2047-04-10'
    - '2048-03-30'
    - '2049-04-18'
    - '2050-04-07'
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

## Påskdagen
- First sunday after full moon on the year.

## Vårdagjämning (2025-04-25)
- This software are assuming that vårdagjämningen always is on mars 20 which is not the case.
- Has nothing to do with calculation of Påskdagen which only depends on full moon in this data set.
- https://sv.wikipedia.org/wiki/Höstdagjämningen

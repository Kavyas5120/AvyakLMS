<style>body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: #333;

}

.container {
    max-width: 90%;
    margin-top: 40px;
    margin-bottom: 40px;
    
}

h2 {
    font-size: 1.5rem;
    color: #495057;
    margin-bottom: 20px;
    text-align: left;
    padding-left: 25px;
}

.table {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-left: 20px;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
    font-size: 1rem;
    vertical-align: middle;
}

.table thead {
    background-color: grey;
    color: white;
    text-transform: uppercase;
}

.table tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
}

.table tbody tr:nth-child(even) {
    background-color: #ffffff;
}

.table-bordered {
    border: 1px solid #dee2e6;
}

.table-bordered th, .table-bordered td {
    border: 1px solid #dee2e6;
}

.table-striped tbody tr:hover {
    background-color: #e9ecef;
}

@media (max-width: 768px) {
    .table th, .table td {
        font-size: 0.9rem;
        padding: 10px;
    }
}</style>
@extends('layouts.app')
@section('content')
<div class="content">
<div class="container mt-5" id="abc">
    <h2 >Event Dates for 2025</h2>
    <table class="table table-bordered  mt-4">
        <thead>
            <tr>
                <th class="text-white bg-secondary">SI No</th>
                <th class="text-white bg-secondary">Occasion</th>
                <th class="text-white bg-secondary">Date</th>
                <th class="text-white bg-secondary">Day</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>New Year’s Day</td>
                <td>January 1</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Guru Gobind Singh’s Birthday</td>
                <td>January 6</td>
                <td>Monday</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Makar Sankranti / Magha Bihu / Pongal / Hazarat Ali’s Birthday</td>
                <td>January 14</td>
                <td>Tuesday</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Basant Panchami / Sri Panchami</td>
                <td>February 2</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Guru Ravi Das’s Birthday</td>
                <td>February 12</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Shiva Ji Jayanti</td>
                <td>February 19</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Swami Dayananda Saraswati Jayanti</td>
                <td>February 23</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Holika Dahan</td>
                <td>March 13</td>
                <td>Thursday</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Dolayatra</td>
                <td>March 14</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Jumat-ul-Vida</td>
                <td>March 28</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Chaitra Sukladi / Gudi Padava / Ugadi / Cheti Chand</td>
                <td>March 30</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Ram Navmi</td>
                <td>April 6</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Vaisakhi / Vishu</td>
                <td>April 13</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Puthandu (Tamil New Year’s Day)</td>
                <td>April 14</td>
                <td>Monday</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Vaishakhadi (Bengal)/ Bahag Bihu (Assam)</td>
                <td>April 15</td>
                <td>Tuesday</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Easter Sunday</td>
                <td>April 20</td>
                <td>Sunday</td>
            </tr>
            <tr>
                <td>17</td>
                <td>Guru Rabindranath’s Birthday</td>
                <td>May 9</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>18</td>
                <td>Rath Yatra</td>
                <td>June 27</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>19</td>
                <td>Raksha Bandhan</td>
                <td>August 9</td>
                <td>Saturday</td>
            </tr>
            <tr>
                <td>20</td>
                <td>Parsi New Year’s Day / Nauraj</td>
                <td>August 15</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>21</td>
                <td>Janmashtami (Smarta)</td>
                <td>August 15</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>22</td>
                <td>Ganesh Chaturthi / Vinayaka Chaturthi</td>
                <td>August 27</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>23</td>
                <td>Onam or Thiru Onam Day</td>
                <td>September 5</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>24</td>
                <td>Dussehra (Saptami)</td>
                <td>September 29</td>
                <td>Monday</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Dussehra (Mahashtami)</td>
                <td>September 30</td>
                <td>Tuesday</td>
            </tr>
            <tr>
                <td>26</td>
                <td>Dussehra (Mahanavmi)</td>
                <td>October 1</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>27</td>
                <td>Maharishi Valmiki’s Birthday</td>
                <td>October 07</td>
                <td>Thursday</td>
            </tr>
            <tr>
                <td>28</td>
                <td>Karaka Chaturthi (KarwaChouth)</td>
                <td>October 10</td>
                <td>Friday</td>
            </tr>
            <tr>
                <td>29</td>
                <td>Naraka Chaturdasi</td>
                <td>October 20</td>
                <td>Monday</td>
            </tr>
            <tr>
                <td>30</td>
                <td>Govardhan Puja</td>
                <td>October 22</td>
                <td>Wednesday</td>
            </tr>
            <tr>
                <td>31</td>
                <td>Bhai Duj</td>
                <td>October 23</td>
                <td>Thursday</td>
            </tr>
            <tr>
                <td>32</td>
                <td>Pratihar Shashthi or Surya Shashthi (Chhat Puja)</td>
                <td>October 28</td>
                <td>Tuesday</td>
            </tr>
            <tr>
                <td>33</td>
                <td>Guru Teg Bahadur’s Martyrdom Day</td>
                <td>November 24</td>
                <td>Monday</td>
            </tr>
            <tr>
                <td>34</td>
                <td>Christmas Eve</td>
                <td>December 24</td>
                <td>Wednesday</td>
            </tr>
        </tbody>
    </table>
</div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

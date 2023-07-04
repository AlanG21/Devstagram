@extends('layouts.app')

@section('titulo')
Tu Cuenta
@endsection

@section('contenido')
<div class="flex flex-col">
    <div class="w-56 bg-white px-4 py-6 space-y-2">
        <!-- Grupo: Main -->
        <div class="relative">
            <button class="text-gray-600 hover:text-gray-800 font-medium" onclick="toggleSubMenu('mainSubMenu')">
                Main
            </button>
            <div id="mainSubMenu" class="absolute top-0 left-full hidden bg-white text-gray-600 py-2 px-4 shadow-md rounded-md">
                <a href="#" class="block py-1 hover:bg-gray-100">Dashboard</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Apps</a>
            </div>
        </div>

        <!-- Grupo: Employees -->
        <div class="relative">
            <button class="text-gray-600 hover:text-gray-800 font-medium" onclick="toggleSubMenu('employeesSubMenu')">
                Employees
            </button>
            <div id="employeesSubMenu" class="absolute top-0 left-full hidden bg-white text-gray-600 py-2 px-4 shadow-md rounded-md">
                <a href="#" class="block py-1 hover:bg-gray-100">Employees</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Clients</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Projects</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Tasks</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Task Board</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Leads</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Tickets</a>
            </div>
        </div>

        <!-- Grupo: HR -->
        <div class="relative">
            <button class="text-gray-600 hover:text-gray-800 font-medium" onclick="toggleSubMenu('hrSubMenu')">
                HR
            </button>
            <div id="hrSubMenu" class="absolute top-0 left-full hidden bg-white text-gray-600 py-2 px-4 shadow-md rounded-md">
                <a href="#" class="block py-1 hover:bg-gray-100">Sales</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Accounting</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Payroll</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Policies</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Reports</a>
            </div>
        </div>

        <!-- Grupo: Performance -->
        <div class="relative">
            <button class="text-gray-600 hover:text-gray-800 font-medium" onclick="toggleSubMenu('performanceSubMenu')">
                Performance
            </button>
            <div id="performanceSubMenu" class="absolute top-0 left-full hidden bg-white text-gray-600 py-2 px-4 shadow-md rounded-md">
                <a href="#" class="block py-1 hover:bg-gray-100">Goals</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Training</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Promotion</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Resignation</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Termination</a>
            </div>
        </div>

        <!-- Grupo: Administration -->
        <div class="relative">
            <button class="text-gray-600 hover:text-gray-800 font-medium" onclick="toggleSubMenu('administrationSubMenu')">
                Administration
            </button>
            <div id="administrationSubMenu" class="absolute top-0 left-full hidden bg-white text-gray-600 py-2 px-4 shadow-md rounded-md">
                <a href="#" class="block py-1 hover:bg-gray-100">Assets</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Jobs</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Knowledgebase</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Activities</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Users</a>
                <a href="#" class="block py-1 hover:bg-gray-100">Settings</a>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center flex-1 py-6">
        <h1 class="text-3xl font-bold mb-6">Dashboard de Administración</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Gráfica de Total Revenue -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-bold mb-4">Total Revenue</h2>
                <canvas id="totalRevenueChart"></canvas>
            </div>

            <!-- Gráfica de Sales Overview -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-bold mb-4">Sales Overview</h2>
                <canvas id="salesOverviewChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    var activeSubMenu = null;

    function toggleSubMenu(subMenuId) {
        var subMenu = document.getElementById(subMenuId);

        if (activeSubMenu && activeSubMenu !== subMenu) {
            activeSubMenu.classList.add("hidden");
        }

        subMenu.classList.toggle("hidden");
        activeSubMenu = subMenu;
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const totalRevenueData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Total Revenue',
            data: [500, 1000, 750, 1250, 800, 1500],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    const totalRevenueConfig = {
        type: 'bar',
        data: totalRevenueData,
        options: {}
    };

    const totalRevenueChart = new Chart(document.getElementById('totalRevenueChart'), totalRevenueConfig);

    const salesOverviewData = {
        labels: ['Product A', 'Product B', 'Product C', 'Product D', 'Product E'],
        datasets: [{
            label: 'Sales Overview',
            data: [50, 75, 100, 120, 90],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    };

    const salesOverviewConfig = {
        type: 'bar',
        data: salesOverviewData,
        options: {}
    };

    const salesOverviewChart = new Chart(document.getElementById('salesOverviewChart'), salesOverviewConfig);

    function toggleSubMenu(subMenuId) {
        const subMenu = document.getElementById(subMenuId);
        subMenu.classList.toggle('hidden');
    }
</script>
@endsection

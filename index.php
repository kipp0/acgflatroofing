<?php include('header.php') ?>
  
<!-- <label>Job Role:</label>
          <select id="job" name="userJob">
            
            <optgroup label="Web">
              <option value="frontendDeveloper">Frontend Developer</option>
              <option value="phpDeveloper">Php Developer</option>
              <option value="pythonDeveloper">Python Developer</option>
            </optgroup>
            
            <optgroup label="Mobile">
              <option value="iosDeveloper">iOS Developer</option>
              <option value="AndroidDeveloper">Android Developer</option>
            </optgroup>            
          </select> -->

<div class="container-fluid alert">

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<button class="hello btn btn-default btn-lg" type="button" data-toggle="modal" data-target="#new" >New</button>
				<button class="btn btn-default" type="button">Existing</button>
			</div>
		</div>
	</div>

<!-- Modal -->
<div class="tempexisting">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

<p id="notice"><%= notice %></p>

<h1>Listing Customers</h1>

<table>
  <thead>
    <tr>
      <th>First</th>
      <th>Last</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Locations</th>
      <th colspan="3"></th>
    </tr>
  </thead>

  <tbody>
    <% @customers.each do |customer| %>
      <tr>
        <td><%= customer.first %></td>
        <td><%= customer.last %></td>
        <td><%= customer.phone %></td>
        <td><%= customer.email %></td>
        <td><%= customer.locations %></td>
        <td><%= link_to 'Show', customer %></td>
        <td><%= link_to 'Edit', edit_customer_path(customer) %></td>
        <td><%= link_to 'Destroy', customer, method: :delete, data: { confirm: 'Are you sure?' } %></td>
      </tr>
    <% end %>
  </tbody>
</table>



			</div>
		</div>
	</div>
</div>
<div class="tempnew">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
      <form action="index.html" method="post">
      <H1>Create Customer</H1>
        
        <fieldset>
          
          <label for="name">First Name:</label>
          <%= f.text_field :first %>

					<label for="name">Last Name:</label>
          <%= f.text_field :last %>

          <label for="email">Email:</label>
          <%= f.text_field :email %>

          <label for="pass">Cell:</label>
          <%= f.text_field :phone %>

        </fieldset>
          
          
        <button type="submit">Create</button>
      </form>
      </div>
      </div>
      </div>
      </div>
              
<?php include('footer.php') ?>
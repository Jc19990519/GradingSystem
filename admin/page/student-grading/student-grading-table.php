<div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle shadow">
  <table class="min-w-full divide-y divide-gray-200 table-fixed">
    <thead class="bg-gray-100">
      <tr>
        <th scope="col" class="th">
          No.
        </th>
        <th scope="col" class="th">
          Student ID
        </th>
        <th scope="col" class="th">
          Student Name
        </th>
        <th scope="col" class="th">
          Gender
        </th>
        <th scope="col" class="th">
          1st
        </th>
        <th scope="col" class="th">
          2nd
        </th>
        <!-- <th scope="col" class="th">
          3rd
        </th>
        <th scope="col" class="th">
          4th
        </th> -->
        <th scope="col" class="th">
          Final
        </th>
        <th scope="col" class="th">
          Remarks
        </th>
        <th scope="col" class="th">
        </th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200 ">
      <?php foreach ($result as $data) : ?>
        <?php
        $studentid = $data['student_number'];
        $studentname = $data['student_lname'];
        $studentname .= ', ' . $data['student_fname'];
        $studentname .= ' ' . $data['student_mname'];
        ?>
        <tr class="hover:bg-gray-100 group">
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $i += 1; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['student_number']; ?>
            </div>
          </td>
          <td class="td-title">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-500 group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
            <div class="text-sm font-normal text-gray-500">
              <div class="text-base font-semibold text-gray-900 capitalize">
                <?= $data['student_lname'] . ', ' . $data['student_fname'] . ' ' . $data['student_mname']; ?>
              </div>
              <div class="text-sm font-normal text-gray-500">
                <?= $data['student_email']; ?>
              </div>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['student_gender']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['grade_first']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['grade_second']; ?>
            </div>
          </td>
          <!-- <td class="td">
            <div class="flex items-center capitalize">
              <#?= $data['grade_third']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <#?= $data['grade_fourth']; ?>
            </div>
          </td> -->
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['grade_avg']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['grade_remarks']; ?>
            </div>
          </td>
          <td class="p-4 space-x-2 text-right whitespace-nowrap">
            <button type="button" data-edit-button data-student-id="<?= $studentid; ?>" data-name="<?= $studentname; ?>" data-id="<?= $data['grade_id']; ?>" data-first="<?= $data['grade_first']; ?>" data-second="<?= $data['grade_second']; ?>" data-third="<?= $data['grade_third']; ?>" data-fourth="<?= $data['grade_fourth']; ?>" data-avg="<?= $data['grade_avg']; ?>" data-remarks="<?= $data['grade_remarks']; ?>" class="btn-cyan">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
              </svg>
              Edit
            </button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>